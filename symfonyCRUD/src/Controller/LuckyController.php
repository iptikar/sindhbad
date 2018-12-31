<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\PostType;
use App\Entity\Product;


class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
    
    
    public function create(Request $request) {
		
		$post = new Product();
        $form = $this->createForm(PostType::class, $post);
        $form->add('submit', SubmitType::class, [
            'label' => 'Create',
            'attr' => ['class' => 'btn btn-default pull-right'],
        ]);
        
		return $this->render('lucky/create.html.twig',['form'=> $form->createView()]);
	}
	
	
	
    
}
