<?php

namespace CalculatorBundle\Controller;

use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $calculator = new Calculator();

        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $leftOperand = $calculator->getLeftOperand();
            $rightOperand = $calculator->getRightOperand();
            $operator = $calculator->getOperator();

            $result = 0;

            switch ($operator) {
                case '+':
                    $result = $leftOperand + $rightOperand;
                    break;
                case '-':
                    $result = $leftOperand - $rightOperand;
                    break;
                case '*':
                    $result = $leftOperand * $rightOperand;
                    break;
                case '/':
                    $result = $leftOperand / $rightOperand;
                    break;
                case '^':
                    $result = $leftOperand ** $rightOperand;
                    break;
                case 'AND':
                    $result = $leftOperand & $rightOperand;
                    break;
                case 'OR':
                    $result = $leftOperand | $rightOperand;
                    break;
                case 'XOR':
                    $result = $leftOperand ^ $rightOperand;
                    break;
                case '<<':
                    $result = $leftOperand << $rightOperand;
                    break;
                case '>>':
                    $result = $leftOperand >> $rightOperand;
                    break;
            }

            return $this->render('calculator/index.html.twig', [
                'result'     => $result,
                'calculator' => $calculator,
                'form'       => $form->createView()
            ]);
        }

        return $this->render('calculator/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
