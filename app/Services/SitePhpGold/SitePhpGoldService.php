<?php

namespace App\Services\SitePhpGold;

use App\Services\SendEmail\SendEmailService;

/**
 * Classe SendEmailService
 *
 * Esta classe é responsável por enviar e-mails utilizando API.
 */
class SitePhpGoldService
{

     /**
      * @var SendEmailService      
      */
     protected $sendEmailService;


     public function __construct(SendEmailService $sendEmailService)
     {
          $this->sendEmailService = $sendEmailService;
     }


     public function handleEmailData(array $data)
     {
          $dataSendEmail['name'] = $data['name'];
          $dataSendEmail['email'] = 'paulofullstack@hotmail.com';
          $dataSendEmail['subjectMatter'] = $data['subject'];
          $dataSendEmail['message'] = $data['message'];
          $dataSendEmail['titleSenderEmail'] = 'Criação de site';
          
          $statuSendEmail = $this->sendEmailService->sendEmail($dataSendEmail);

          if($statuSendEmail){
               return [
                    'messageSuccess' => 'Email enviado com sucesso!'
               ];
          }

          return [
               'messageDanger' => 'Erro ao enviar email!'
          ];

     }
}
