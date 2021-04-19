<?
use Bitrix\Main\Mail\Event;

/**
 * После завершения выгрузки 1c каталога отправляется письмо на почту
 */

AddEventHandler("catalog", "OnCompleteCatalogImport1C", Array("EventClass", "ric_OnCompleteCatalogImport1C"));

class EventClass{
  function ric_OnCompleteCatalogImport1C(){
    $text = 'Выгрузка каталога завершена';
    $mail = 'mail@mail.ru';
    mail($mail, 'Завершение выгрузки каталога', $message);
    
    // либо через почтовое событие 
    Event::send(array(
        "EVENT_NAME" => "TEST",
        "LID" => "s1",
        "C_FIELDS" => array(
          "EMAIL" => $email,
          "USER_ID" => 1
        ),
    ));
  }
}	

?>