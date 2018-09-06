<?php

namespace App\Controller;

use App\Entity\TasksList;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class TasksListController extends AbstractController
{
    
    /**
    * @Route("/TasksList/index" , name="tasks_list")
    * @Method({"GET"})
    */
    public function index()
    {
        $tasks = $this->getDoctrine()
                ->getRepository(TasksList::class)
                ->findAll();
        
        return $this->render('tasksList/index.html.twig' , 
                array('Tasks' => $tasks));  
        
    }
    
   
    /**
     * @Route("/task/new" , name="new_task")
     * @Method({"GET" , "POST"})
     */
    public function new(Request $request)
    {
        $task = new TasksList();
        
        $form = $this->createFormBuilder($task)
                ->add('title', TextType::class, array('attr'
                    =>array('class'=>'form-control')))
                ->add('body' , TextareaType::class, array(
                    'required'=>FALSE,
                    'attr'=>array('class'=>'form-control')
                ))
                ->add('save', SubmitType::class, array(
                    'label'=>'Create',
                    'attr'=>array('class'=>'btn btn-primary mt-3')
                ))
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isSubmitted()&& $form->isValid())
        {
            $task = $form->getData();
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();
            
            return $this->redirectToRoute('tasks_list');
        }
        
                return $this->render('tasksList/new.html.twig',array(
                    'form'=>$form->createView()
                ));
    }
    
     /**
     * @Route("/task/edit/{id}" , name="edit_task")
     * @Method({"GET" , "POST"})
     */
    public function edit(Request $request , $id)
    {
        $task = new TasksList();
        $task = $this->getDoctrine()
                ->getRepository(TasksList::class)
                ->find($id);
        
        $form = $this->createFormBuilder($task)
                ->add('title', TextType::class, array('attr'
                    =>array('class'=>'form-control')))
                ->add('body' , TextareaType::class, array(
                    'required'=>FALSE,
                    'attr'=>array('class'=>'form-control')
                ))
                ->add('save', SubmitType::class, array(
                    'label'=>'Update',
                    'attr'=>array('class'=>'btn btn-primary mt-3')
                ))
                ->getForm();
        
        $form->handleRequest($request);
        
        if($form->isSubmitted()&& $form->isValid())
        {
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            
            return $this->redirectToRoute('tasks_list');
        }
        
                return $this->render('tasksList/edit.html.twig',array(
                    'form'=>$form->createView()
                ));
    }
    
    
     /**
     * @Route("/task/{id}" , name ="tasks_show")
     */
    public function show($id)
    {
        $task = $this->getDoctrine()
                ->getRepository(TasksList::class)
                ->find($id);
        
        return $this->render('tasksList/show.html.twig' , 
                array('Task' => $task));
    }
    
    /**
     * @Route("/task/delete/{id}")
     * @Method({"DELETE"})
     */
    public function delete(Request $request, $id)
    {
        $task = $this->getDoctrine()
                ->getRepository(TasksList::class)
                ->find($id);
        
         $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($task);
            $entityManager->flush();
            
        $response = new Response();
        $response->send();
    }


//    /**
//     * @Route("/TasksList/save")
//     */
//    public function save()
//    {
//        $entityManager = $this->getDoctrine()->getManager();
//        
//        $tasks = new TasksList();
//        $tasks->setTitle('Task three');
//        $tasks->setBody('This is the body for task number three');
//        
//        $entityManager->persist($tasks);
//        
//        $entityManager->flush();
//        
//        return new Response('Saved the task with the id of '.$tasks->getId());
//    }
   
}

