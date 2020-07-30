<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy-policy');

Route::get('/faq', function () {

  $faqs_prima_del_corso = [
    [
      'domanda' => 'Chi può fare il corso Boolean?',
      'risposta' => 'Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare il mestiere di sviluppatore.
      Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza lavorativa, ma anche affermati professionisti che vogliono cambiare settore.Se non hai mai programmato o se hai già seguito qualche corso ma senti di non aver approfondito abbastanza per diventare programmatore, Boolean è il corso che fa per te.',
    ],
    [
      'domanda' => 'Che competenze devo avere per iniziare il corso?',
      'risposta' => 'Il corso parte da zero, quindi non serve alcuna competenza di programmazione, è necessario però superare il processo di selezione.',
    ],
    [
      'domanda' => 'In cosa consiste il processo di selezione?',
      'risposta' => 'Boolean è un corso intensivo che richiede impegno costante, dedizione e un’attitudine al problem solving. Per assicurarci che ogni studente abbia concrete possibilità di diventare uno sviluppatore e iniziare una nuova carriera, selezioniamo gli studenti tramite un test di logica a risposta multipla e un colloquio motivazionale. Contattaci per iniziare il tuo percorso o per saperne di più!',
    ]
  ];
  // $faqs_prima_del_corso = config('config.faqs');
  $faqs_dopo_il_corso = [
    [
      'domanda' => 'Ho la certezza di essere assunto?',
      'risposta' => 'Dipende tutto da te! Come dimostrano numerosi studi di settore, lo sviluppatore web è uno dei mestieri più ricercati in Italia e Boolean fornisce tutte le competenze richieste dalle aziende per iniziare a fare questo lavoro. Oltre a fornirti conoscenze di programmazione, ti presentiamo alle nostre aziende partner che assumono in tutta Italia e ti aiutiamo a prepararti al meglio per i colloqui!',
    ],
    [
      'domanda' => 'Terminato il corso, sono supportato nella ricerca del lavoro?',
      'risposta' => 'Certamente! Verrai presentato a oltre 50 aziende che operano nel settore Internet in Italia. Dalla multinazionale più quotata alla startup in ascesa, avrai l’occasione di presentare te stesso e le tue qualità da neo-sviluppatore. Inoltre, ti affianchiamo nella costruzione del CV, del portfolio di progetti e simuliamo insieme dei colloqui: il tuo successo è il nostro!',
    ],
    [
      'domanda' => 'Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?',
      'risposta' => 'Il 100%. Tutti gli studenti che hanno terminato il corso hanno ricevuto una o più offerte di lavoro. Il nostro corso fornisce solide basi di programmazione ed essendo il mestiere del developer molto ricercato, le aziende sono sempre ben disposte ad assumere persone competenti e volenterose.',
    ]
  ];

    return view('faq', [
      'faqs_prima_del_corso' => $faqs_prima_del_corso,
      'faqs_dopo_il_corso' => $faqs_dopo_il_corso
    ]);
})->name('faq');
