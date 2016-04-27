<?php



/**

 * Project:     Login PHP Class

 * File:        class_login.php

 * Purpose:     Authenticates users by checking their data in a mysql database

 *

 * For questions, help, comments, discussion, etc, please send

 * e-mail to antonio.desire@gmail.com

 *

 * @link http://antoniociccia.netsons.org

 * @author Antonio Ciccia <antonio.desire@gmail.com>

 * @package Login PHP Class

 * @version 1.0

 * 

 * This program is free software: you can redistribute it and/or modify

 * it under the terms of the GNU General Public License as published by

 * the Free Software Foundation, either version 3 of the License, or

 * (at your option) any later version.

 *

 * This program is distributed in the hope that it will be useful,

 * but WITHOUT ANY WARRANTY; without even the implied warranty of

 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

 * GNU General Public License for more details.

 *

 * You should have received a copy of the GNU General Public License

 * along with this program.  If not, see <http://www.gnu.org/licenses/

 */

 

class Login

{
    private $database;

    private $databaseUsersTable;

    private $showMessage;

    private $cryptMethod;

    

    function Login()

    {

            session_start();

        if(!isset($_SESSION)) 

            $_SESSION['user_login_session']=false;

    }



    /**

     * Sets the database users table

     *

     * @param string $database_user_table

     */

    public function setDatabase($database)

    {

        $this->database=$database;

    }

    

    

    /**

     * Sets the crypting method

     *

     * @param string $crypt_method - You can set it as 'md5' or 'sha1' to choose the crypting method for the user password.

     */

    public function setCryptMethod($crypt_method)

    {

        $this->cryptMethod=$crypt_method;

    }



    /**

     * Crypts a string

     *

     * @param string $text_to_crypt -  crypt a string if $this->cryptMethod was defined.

     * If not, the string will be returned uncrypted.

     */

    public function setCrypt($text_to_crypt)

    {

        switch($this->cryptMethod)

        {

            case 'md5': $text_to_crypt=trim(md5($text_to_crypt)); break;

            case 'sha1': $text_to_crypt=trim(sha1($text_to_crypt)); break;

        }

       return $text_to_crypt;

    }



    /**

     * Anti-Mysql-Injection method, escapes a string.

     *

     * @param string $text_to_escape

     */

    static public function setEscape($text_to_escape)

    {

        if(!get_magic_quotes_gpc()) $text_to_escape=mysql_real_escape_string($text_to_escape);

        return $text_to_escape;

    }



    /**

     * If on true, displays class messages.

     *

     * @param boolean $database_user_table

     */

    public function setShowMessage($login_show_message)

    {

        if(is_bool($login_show_message)) $this->showMessage=$login_show_message;

    }

    

    /**

     * Prints the class messages with a customized style if html tags are defined.

     *

     * @param string $message_text - the message text

     * @param string $message_html_tag_open - the html tag placed before the text

     * @param string $message_html_tag_close - the html tag placed after the text

     * @param boolean $message_die - if on true die($message_text);

     */ 

    public function getMessage($message_text, $message_html_tag_open=null, $message_html_tag_close=null, $message_die=false)

    {

        if($this->showMessage)

        {

            if(!$message_die) die($message_text);

            else echo $message_html_tag_open . $message_text . $message_html_tag_close;

        }

    }



    /**

     * If the user name and password sent via $ _POST method, are in the database, sets login sessions. Else, displays an error message.

     *

     * The user form data needed is: user_name and user_pass

     */

    public function setLoginSession()

    {



        if(!$this->databaseUsersTable) $this->getMessage('Users table in the database is not specified. Please specify it before any other operation using the method setDatabaseUsersTable();', '', '', 'true');

        //if(!$this->getLoginSession())

        {
            $user_name=isset($_POST['user_name']) ? $_POST['user_name'] : NULL;
            $user_pass=isset($_POST['user_pass']) ? $_POST['user_pass'] : NULL;
            $user_name=$this->setEscape($user_name);

            $user_pass=$this->setCrypt($user_pass);

            //echo  "SELECT * FROM"." ".$this->databaseUsersTable." "."WHERE username='$user_name' AND pass='$user_pass'";

            $serial=file (__DIR__."/../config/terminal.txt");
            $query_serial = "SELECT serial FROM terminal where serial='".$this->limpiar($serial[0])."' 
                AND ip='".$_SERVER['REMOTE_ADDR']."' AND enabled=1 limit 1";
            list($serial_db) = $this->database->get_row($query_serial);

                $_SESSION['serial'] = $serial_db;


            $result="SELECT person.person_id,username,name,firstname,role,homepage,activo 
                    FROM perlogin, person 
                    WHERE username='$user_name' AND password='$user_pass' AND perlogin.person_id=person.person_id";
           list($person_id,$username,$name,$firstname,
                $role,$homepage,$activo) = $this->database->get_row($result);
            //echo $serial_db;
            if ($activo)
            {
                
                $_SESSION['person_id']=$person_id;
                $_SESSION['username']=$username;
                $_SESSION['name']=$name.' '.$firstname;
                $_SESSION['role']=$role;
                $_SESSION['homepage']=$homepage;
                // $_SESSION['store_id']=1;

                // $_SESSION['sucursal']="Carranza";

                $_SESSION['user_active']=$activo;

                $_SESSION['user_login_session']=TRUE;

                // $_SESSION['cart']=$item;

                //  $_SESSION['host'] = $_SERVER['HTTP_HOST'];
                // unset($_SESSION['cart']);
            }

            else

            {

                $this->getMessage('Access data entered is incorrect.');

            }

        }

    }


public function limpiar  ($str){
    return preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $str);
}
    

    /**

     * Gets login session, true or false.

     */

    public function getLoginSession()

    {
        //$userloginsession = $_SESSION['user_login_session'];
        if(isset($_SESSION['user_login_session'])) return true;

        else return false;

    }



    /**

     * When called, it destroys login session.

     * 

     * Logout method

     */

    public function unsetLoginSession()

    {

        //if($this->getLoginSession())

        {

            unset($_SESSION['user_id']);

            unset($_SESSION['username']);

            unset($_SESSION['user_active']);

            unset($_SESSION['administrador']);

            unset($_SESSION['user_login_session']);

            unset($_SESSION['cupon']);

            unset($_SESSION['serial']);

        }
        return $_SESSION['user_active'];

    }



    /**

     * Get person_id if login session is true.
     */

    public function getPersonId()

    {
        $person_id = isset($_SESSION['person_id']) ? $_SESSION['person_id'] : NULL;
        if($_SESSION['user_login_session']) return $person_id;      

    }

/**

     * Get person_id if login session is true.
     */

    public function getName()

    {
        $role = isset($_SESSION['name']) ? $_SESSION['name'] : NULL;
        if($_SESSION['user_login_session']) return $role;      

    }

    /**

     * Get person_id if login session is true.
     */

    public function getHomePage()

    {
        $homepage = isset($_SESSION['homepage']) ? $_SESSION['homepage'] : NULL;
        $isLogged = isset($_SESSION['user_login_session']) ? $_SESSION['user_login_session'] : NULL;
        if($isLogged) return $homepage;      

    }





    /**

     * Get person_id if login session is true.
     */

    public function getRole()

    {
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : NULL;
        if($_SESSION['user_login_session']) return $role;      

    }





 



    /**

     * Gets logged user name if login session is true.
     */

    public function getUserName()

    {
        $user_name = isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
        if($_SESSION['user_login_session']) return $user_name;      

    }



    /**

     * Sets logged user active if login session is true.
     */

    public function setUserActive()

    {

        if($this->getLoginSession())

        {

            if(!$_SESSION['user_active'])

            mysql_query("UPDATE"." ".$this->databaseUsersTable." "."SET activo='true' WHERE admin_id='".$_SESSION['user_id']."'");

            else $this->getMessage('The  entered username is already active in our database.');

        }

    }

    

    /**

     * Gets the user activation status if login session is true.

     */

    public function getUserActive()

    {

        if($this->getLoginSession())

        {

            if(isset($_SESSION['user_active'])) return true;

            else return false;

        }

    }

    

}



?>