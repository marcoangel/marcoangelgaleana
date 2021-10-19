<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";
    class Mail{
        private $mail;

        public function __construct(){
            $this->mail = $this->connectionHost();
        }

        private function connectionHost(){
            try{
                $mail = new PHPMailer(true); 
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->Host = "ssl://frey.hosting-mexico.net";
                $mail->SMTPAuth = true;
                $mail->Username = "contacto@marcoangelgaleana.com";
                $mail->Password = "Marcoangel93";
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
            }
            catch(Throwable $e){
                return false;
            }
            return $mail;
        }

        public function sendMail($email, $subject, $name, $message){
            try{
                $this->mail->setFrom("contacto@marcoangelgaleana.com", "Marco A. Angel");
                $this->mail->addAddress($email, $name);
                $this->mail->Subject = $subject;
                $this->mail->Body    = $message;
                ob_start();
                $this->mail->send();
                ob_end_clean();
            }
            catch(Throwable $e){
                return false;
            }
            return true;
        }
    }
?>