<?php

namespace SnapQuizz\Controllers;

/**
 * Class DefaultController
 * @package UploadFichier\Controllers
 */
class DefaultController extends Controller
{
    /**
     *
     */
    public function indexAction()
    {
        session_start();
        return $this->twig->render('question1.html.twig', array(
            'session' => $_SESSION,
                'cookie' => $_COOKIE,
                'post' => $_POST
            ));
    }

    /**
     *
     */
    public function question1Action()
    {
        session_start();
        return $this->twig->render('question1.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST
        ));
    }

    /**
     *
     */
    public function answer1Action()
    {
        session_start();
        $answer1 = $_POST['question-1-answers'];
        $totalCorrect = 0;
        if ($answer1 == "A"){
            $totalCorrect++;
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        } else {
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        }
        return $this->twig->render('answer1.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST,
            'answer1' => $answer1,
            'totalCorrect' => $totalCorrect
        ));
    }

    /**
     *
     */
    public function question2Action()
    {
        session_start();
        return $this->twig->render('question2.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST
        ));
    }

    /**
     *
     */
    public function answer2Action()
    {
        session_start();
        $answer2 = $_POST['question-2-answers'];
        $totalCorrect = $_COOKIE['totalCorrect'];
        if ($answer2 == "A"){
            $totalCorrect++;
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        } else {
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        }
        return $this->twig->render('answer2.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST,
            'answer2' => $answer2,
            'totalCorrect' => $totalCorrect
        ));
    }

    /**
     *
     */
    public function question3Action()
    {
        session_start();
        return $this->twig->render('question3.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST
        ));
    }

    /**
     *
     */
    public function answer3Action()
    {
        session_start();
        $answer3 = $_POST['question-3-answers'];
        $totalCorrect = $_COOKIE['totalCorrect'];
        if ($answer3 == "A"){
            $totalCorrect++;
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        } else {
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        }
        return $this->twig->render('answer3.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST,
            'answer3' => $answer3,
            'totalCorrect' => $totalCorrect
        ));
    }

    /**
     *
     */
    public function question4Action()
    {
        session_start();
        return $this->twig->render('question4.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST
        ));
    }

    /**
     *
     */
    public function answer4Action()
    {
        session_start();
        $answer4 = $_POST['question-4-answers'];
        $totalCorrect = $_COOKIE['totalCorrect'];
        if ($answer4 == "A"){
            $totalCorrect++;
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        } else {
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        }
        return $this->twig->render('answer4.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST,
            'answer4' => $answer4,
            'totalCorrect' => $totalCorrect
        ));
    }

    /**
     *
     */
    public function question5Action()
    {
        session_start();
        return $this->twig->render('question5.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST
        ));
    }

    /**
     *
     */
    public function answer5Action()
    {
        session_start();
        $answer5 = $_POST['question-5-answers'];
        $totalCorrect = $_COOKIE['totalCorrect'];
        if ($answer5 == "A"){
            $totalCorrect++;
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        } else {
            $cookiename = 'totalCorrect';
            $cookievalue = $totalCorrect;
            setcookie($cookiename, $cookievalue, time() + 3600);
        }
        return $this->twig->render('answer5.html.twig', array(
            'session' => $_SESSION,
            'cookie' => $_COOKIE,
            'post' => $_POST,
            'answer5' => $answer5,
            'totalCorrect' => $totalCorrect
        ));
    }

    /**
     *
     */
    public function successAction()
    {
        session_start();
        return $this->twig->render('success.html.twig', array(
            'cookie' => $_COOKIE
        ));
        session_unset();
        session_destroy();
    }

    /**
     *
     */
    public function logoutAction()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php');
    }

}