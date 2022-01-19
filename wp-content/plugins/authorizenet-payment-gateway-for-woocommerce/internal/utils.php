<?php

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly
}

class Indatos_Authorizenetbasic_Utils
{
   public function __construct() 
   {  


      add_action( 'admin_menu', array(&$this,'authnetpro_tx_transaction_page_menu') );
   }



   function authnetpro_tx_transaction_page_menu()
   {

      add_menu_page( 
         __( 'Authorize.net Recent Transactions', 'authprowoo' ),
         'Authorize.net Transactions',
         'manage_options',
         'authnetbasic_tx_transaction_explorer',
         array(&$this,'authnetbasic_tx_transaction_explorer_callback'),
         plugins_url( 'authorizenet-payment-gateway-for-woocommerce/images/transaction_icon.svg' ),
         6
      ); 



   }

   function authnetbasic_tx_transaction_explorer_callback(){

      echo '<h2>Last 20 Unsettled Authorize.net Transactions</h2>';
      $data_response =  $this->get_recent_transactions();
      $currency = get_woocommerce_currency_symbol();
      $html = '<div class="wrap"><table class="wp-list-table widefat fixed striped table-view-list">';
      $html .= '<thead><tr>';
      $html .= '<td>Invoice/Order#</td>';
      $html .= '<td>Transaction Status</td>';
      $html .= '<td>First Name</td>';
      $html .= '<td>Last Name</td>';
      $html .= '<td>Type</td>';
      $html .= '<td>Last 4</td>';
      $html .= '<td>Amount</td>';
      $html .= '</tr></thead><tbody>';
      if( $data_response->messages->message->code == 'I00001' ){
         $transactions = $data_response->transactions->transaction;

         foreach($transactions as $single_transaction){
            $html .= '<tr>';
            $html .= '<td>'.$single_transaction->invoiceNumber.'</td>';
            $html .= '<td>'.$single_transaction->transactionStatus.'</td>';
            $html .= '<td>'.$single_transaction->firstName.'</td>';
            $html .= '<td>'.$single_transaction->lastName.'</td>';
            $html .= '<td>'.$single_transaction->accountType.'</td>';
            $html .= '<td>'.$single_transaction->accountNumber.'</td>';
            $html .= '<td>'.$currency.''.$single_transaction->settleAmount.'</td>';
            $html .= '</tr>';
         }
         $html .= '</tbody></table></div><p>Note: If you are using same Authorize.net account with multiple sites or softwares, then order numbers might not match with data on this site for some records, if transaction happend on other platform or website.</p><p>More features coming soon</p>';
      }else{
         echo "Unable to get transaction list. Please check if API details are correct.";
      }

      echo $html;
   }

   function get_recent_transactions(){

      $wc_auth = new WC_Tech_Autho();



      if($wc_auth->mode == 'true'){
         $process_url          = 'https://apitest.authorize.net/xml/v1/request.api';
      }
      else{
         $process_url          = 'https://api.authorize.net/xml/v1/request.api';
      }

      $xml = '<getUnsettledTransactionListRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
               <merchantAuthentication>
                  <name>'.$wc_auth->login.'</name>
                  <transactionKey>'.$wc_auth->transaction_key.'</transactionKey>
                  </merchantAuthentication>
                <sorting>
                  <orderBy>submitTimeUTC</orderBy>
                  <orderDescending>true</orderDescending>
                </sorting>
                <paging>
                  <limit>20</limit>
                  <offset>1</offset>
                </paging>
            </getUnsettledTransactionListRequest>';

      $headers = array(
         "Content-type: text/xml",
         "Content-length: ". strlen($xml),
         "Connection: close"
      );

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $process_url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $data = curl_exec($ch);
      curl_close($ch);

      $respone = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOWARNING);

      return $respone;

   }


}