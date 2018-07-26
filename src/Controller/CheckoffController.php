<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckoffController extends Controller
{
  /**
   * @Route("/checkoff", name="checkoff")
   */
  public function index(Request $request)
  {
    $method = $request->getMethod();
    
    if ( $method == 'GET' ) {
      $context = array('http_method' => 'GET',);
      return $this->render('checkoff/index.html.twig', $context);
    }
    
    if ( $method == 'POST' ) return $this->_save($request);
  }
  
  private function _save(Request $request)
  { 
    $context = array('http_method' => 'POST',);
    return $this->render('checkoff/index.html.twig', $context);
  }
}
