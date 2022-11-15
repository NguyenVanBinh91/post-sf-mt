<?php
namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/books", name="books.")
 */
class BooksController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('books/index.html.twig');
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {
        $check = $request->request->all();
        if ($check['email'] == 'nguyenvanbinh030291@gmail.com' && $check['password'] != '') {
          return $this->redirectToRoute('books.list');
        } else {
          return $this->redirectToRoute('books/');
        }
    }

    /**
     * @Route("/list", name="list")
     */
    public function list(BookRepository $bookRepository, Request $request): Response
    {
      $em = $this->getDoctrine()->getManager();
      $key_search = $request->request->get('searchbook');
      if (isset($key_search)) {
          $books = $em->getRepository(Book::class)->search($key_search);
          return $this->render('books/table-list-data.html.twig',['books' =>$books]);
      } else {
        $books = $bookRepository->findAll();
        return $this->render('books/author.html.twig',['books' => $books]);
      }
      
    }

    /**
     * @Route("/detail/{id}", name="detail")
     */
    public function detail(Book $book)
    {
      return $this->render('books/detail.html.twig',['book' => $book]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request)
    {
      // $item = $request->request->all();
      $entityManager = $this->getDoctrine()->getManager();
      $books = new Book();
      $form = $this->createForm(BookType::class, $books);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $books = $form->getData();
        $brochureFile = $form->get('image')->getData();
        if ($brochureFile) {
          $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
          $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
          $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
          try {
              $brochureFile->move(
                  $this->getParameter('brochures_directory'),
                  $newFilename
              );
          } catch (FileException $e) {
              // ... handle exception if something happens during file upload
          }
          $books->setImage($newFilename);
        }
        $entityManager->persist($books);
        $entityManager->flush();
        return $this->redirectToRoute('books.list');
      }
      return $this->render('books/new.html.twig', [
          'form' => $form->createView(),
      ]);
    }

     /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(Book $book, Request $request)
    {
      $books = new Book();
      $entityManager = $this->getDoctrine()->getManager();
      $form = $this->createForm(BookType::class, $book);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $books = $form->getData();
        $brochureFile = $form->get('image')->getData();
        if ($brochureFile) {
          $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
          $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
          $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
          try {
              $brochureFile->move(
                  $this->getParameter('brochures_directory'),
                  $newFilename
              );
          } catch (FileException $e) {
              // ... handle exception if something happens during file upload
          }
          $books->setImage($newFilename);
        }
        $entityManager->persist($books);
        $entityManager->flush();
        return $this->redirectToRoute('books.list');
      }
      return $this->render('books/edit.html.twig', ['form' => $form->createView()]);
    }
   
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(Book $book)
    {
      $em = $this->getDoctrine()->getManager();
      $em->remove($book);
      $em->flush();
      return $this->redirectToRoute('books.list');
    }

    /**
     * @Route("/search", name="search")
     */
    public function search(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
      if (isset($request->request)) {
        $keySearch = $request->request->get('searchbook');
        if ($key_search == '') {
          return $this->redirectToRoute('books.list');
        } else {
          $books = $em->getRepository(Book::class)->findOneBy(['title' => $keySearch]);
          return $this->redirectToRoute('books.list',['books' =>$books]);
        }
      }
      return $this->redirectToRoute('books.list');
    }
}