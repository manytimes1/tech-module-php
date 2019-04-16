<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use AppBundle\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends Controller
{
    /**
     * @Route("/", name="index")
     *
     * @param TaskRepository $tasks
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TaskRepository $tasks)
    {
        $openTasks = $tasks->findBy(['status' => 'Open']);
        $inProgressTasks = $tasks->findBy(['status' => 'In Progress']);
        $finishedTasks = $tasks->findBy(['status' => 'Finished']);

        return $this->render('task/index.html.twig', [
            'openTasks' => $openTasks,
            'inProgressTasks' => $inProgressTasks,
            'finishedTasks' => $finishedTasks
        ]);
    }

    /**
     * @Route("/create", name="create")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $this->addFlash('success', 'Task created successfully.');

            return $this->redirectToRoute('index');
        }

        return $this->render('task/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param TaskRepository $tasks
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit($id, TaskRepository $tasks, Request $request)
    {
        $task = $tasks->find($id);

        if (!$task) {
            $this->addFlash('danger', 'No task found!');

            return $this->redirectToRoute('index');
        }

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', 'Task updated successfully.');

            return $this->redirectToRoute('index',
                ['id' => $id]);
        }

        return $this->render('task/edit.html.twig', [
            'task' => $task,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     *
     * @param $id
     * @param TaskRepository $tasks
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id, TaskRepository $tasks, Request $request)
    {
        $task = $tasks->find($id);

        if (!$task) {
            $this->addFlash('danger', 'No task found!');

            return $this->redirectToRoute('index');
        }

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($task);
            $em->flush();

            $this->addFlash('success', 'Task deleted successfully.');

            return $this->redirectToRoute('index');
        }

        return $this->render('task/delete.html.twig', [
            'task' => $task,
            'form' => $form->createView()
        ]);
    }
}
