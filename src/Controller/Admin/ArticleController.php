<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Service\ActionTexts;
use App\Form\Type\ArticleFormType;
use App\Repository\ArticleRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/admin/articles', name: 'admin_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('admin/article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/admin/articles/create', name: 'admin_article_create', methods: ['GET', 'POST'])]
    public function create(Request $request, ManagerRegistry $doctrine, ActionTexts $actionTexts): Response
    {
        $article = new Article();

        $form = $this->createForm(ArticleFormType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            $entityManager = $doctrine->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash('success', $actionTexts->getSuccessCreate());

            return $this->redirectToRoute('admin_article_index');
        }

        return $this->render('admin/article/create.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/admin/articles/edit/{id}', name: 'admin_article_edit', methods: ['GET', 'POST'])]
    public function edit(Article $article, Request $request, ManagerRegistry $doctrine, ActionTexts $actionTexts): Response
    {
        $form = $this->createForm(ArticleFormType::class, $article);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();

            $entityManager = $doctrine->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            $this->addFlash('success', $actionTexts->getSuccessEdit());

            return $this->redirectToRoute('admin_article_edit', ['id' => $article->getId()]);
        }

        return $this->render('admin/article/edit.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/admin/articles/delete/{id}', name: 'admin_article_delete', methods: ['GET'])]
    public function delete(Article $article, ManagerRegistry $doctrine, ActionTexts $actionTexts): RedirectResponse
    {
        $entityManager = $doctrine->getManager();
        $entityManager->remove($article);
        $entityManager->flush();

        $this->addFlash('success', $actionTexts->getSuccessDelete());

        return $this->redirectToRoute('admin_article_index');
    }
}
