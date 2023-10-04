<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use SoapClient;

class WebServicesController extends AppController
{
    public function index(){
        /*
        $Payments = TableRegistry::getTableLocator()->get('Payments');
        $payments = $Payments->find()->contain(['Accounts', 'PaymentStates', 'PaymentCharges'])->toarray();
        $this->set(compact('payments'));
        */

        $xml='<soapenv:Envelope
        xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:hub="http://www.monex.com.mx/hub">
        <soapenv:Header/>
            <soapenv:Body>
                <hub:pagos> 3 
                    <hub:solicitud> 4 
                        <contrato>3361060</contrato> 5 
                        <pagos> 6 
                            <pagosNacionales> 7 
                                <pagoNacional> 8 
                                    <numeroCuenta>044180001024428174</numeroCuenta> 9 
                                    <monto>15.00</monto>
                                    <iva>1.00</iva>
                                    <fechaOperacion>23/11/2022</fechaOperacion>
                                    <fechaLiquidacion>23/11/2022</fechaLiquidacion>
                                    <nota>CONCEPTO DEL PAGO 22nov22</nota>
                                    <referencia>1234567</referencia>
                                    <rfc></rfc>
                                    <divisa>MXP</divisa>
                                    <situacion>
                                        <folio>?</folio>
                                        <codigo>?</codigo>
                                        <mensaje>?</mensaje>
                                    </situacion>
                                </pagoNacional>
                            </pagosNacionales>
                        </pagos>
                    </hub:solicitud>
                </hub:pagos>
            </soapenv:Body>
        </soapenv:Envelope>';

        
        define("DEBUG", TRUE);

        if(DEBUG)
        {
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
        }

        $wsdl = 'https://bancadigital.monex.com.mx/HubClientServices/HubWebService?wsdl';

        $params = Array(
            "Arg1" => 5,
            "Arg2" => 10
            );

        $options = Array(
            "uri"=> $wsdl,
            "style"=> SOAP_RPC,
            "use"=> SOAP_ENCODED,
            "soap_version"=> SOAP_1_1,
            "cache_wsdl"=> WSDL_CACHE_BOTH,
            "connection_timeout" => 15,
            "trace" => false,
            "encoding" => "UTF-8",
            "exceptions" => false,
            );

        //Enviamos el Request
        $soap = new SoapClient($wsdl, $options);
        $result = $soap->beneficiarios($params); //Aquí cambiamos dependiendo de la acción del servicio que necesitemos ejecutar
        pr($wsdl);
        pr("beneficiarios");
        pr($result);
            










        exit();

    }
}