<?php
namespace App\Command;
use App\Entity\Book;
use App\Repository\BookRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

// the name of the command is what users type after "php bin/console"
//#[AsCommand(name: 'update-status')]
class UpdateStatusCommand extends Command
{
  protected static $defaultName = 'update-status';
  private $entityManager;
  
  public function __construct (BookRepository $bookRepository)
  {
    $this->entityManager = $bookRepository;
    parent::__construct();
  }

  protected function configure(): void
  {
      $this->addArgument('id', InputArgument::REQUIRED, 'The id of the book.');
  }

  public function execute(InputInterface $input, OutputInterface $output): int
  {
    $id = $input->getArgument('id');
    $output->writeln([
        'Update status book id :'.$id,
        '============',
        '',
    ]);
    $book = $this->entityManager->find($id);
    $status = $book->getStatus();
    $checkStatus = $status == 1 ? 2 : 1;
    $book->setStatus($checkStatus);
    $this->entityManager->update($book);
    $output->writeln('Status : '.$checkStatus);
    $output->writeln('Update Status Dont !');
    return 0;
  }
}