<?php

class ErrorObject
{
    private $_error;

    public function __construct($error)
    {
        $this->_error = $error;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->_error;
    }
}

class LogToConsole
{
    private $_errorObject;

    public function __construct(ErrorObject $errorObject)
    {
        $this->_errorObject = $errorObject;
    }

    public function write()
    {
        echo $this->_errorObject->getError();
    }
}

class LogToCSVAdapter extends ErrorObject
{
    private $_errorNumber;

    private $_errorText;

    public function __construct($error)
    {
        parent::__construct($error);

        $parts = explode(':', $this->getError());

        $this->_errorNumber = $parts[0];
        $this->_errorText   = $parts[1];
    }

    /**
     * @return mixed
     */
    public function getErrorNumber()
    {
        return $this->_errorNumber;
    }

    /**
     * @return mixed
     */
    public function getErrorText()
    {
        return $this->_errorText;
    }
}

class LogToCSV
{
    private $_errorObject;

    public function __construct(LogToCSVAdapter $errorObject)
    {
        $this->_errorObject = $errorObject;
    }

    public function write()
    {
        $line = $this->_errorObject->getErrorNumber();
        $line .= ', ';
        $line .= $this->_errorObject->getErrorText();
        $line .= "\n";

        echo $line;
    }
}

class Client
{
    public static function main()
    {
//        $error = new ErrorObject('404: Not Found');
//        $log   = new LogToConsole($error);
//        $log->write();
        $error = new LogToCSVAdapter('404: Not Found');
        $log = new LogToCSV($error);
        $log->write();
    }
}

Client::main();