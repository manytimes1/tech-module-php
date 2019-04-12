<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Form\BookType;
use AppBundle\Repository\BookRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @param BookRepository $books
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BookRepository $books)
    {
       return $this->render('library/index.html.twig', [
           'books' => $books->findAll()
       ]);
    }

    /**
     * @Route("/create", name="create")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function create(Request $request)
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();

            $this->addFlash('primary', 'Book created successfully.');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('library/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     *
     * @param $id
     * @param BookRepository $books
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function edit($id, BookRepository $books, Request $request)
    {
        $book = $books->find($id);

        if (!$book) {
            $this->addFlash('danger', 'No book found!');

            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('primary', 'Book updated successfully.');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('library/edit.html.twig', [
            'book' => $book,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     *
     * @param $id
     * @param BookRepository $books
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id, BookRepository $books, Request $request)
    {
        $book = $books->find($id);

        if (!$book) {
            $this->addFlash('danger', 'No book found!');

            return $this->redirectToRoute('homepage');
        }

        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();

            $this->addFlash('primary', 'Book deleted successfully.');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('library/delete.html.twig', [
            'book' => $book,
            'form' => $form->createView()
        ]);
    }
}
