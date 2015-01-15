<?php

abstract class Colleague
{
    private $_mediator;

    public function __construct(Mediator $mediator)
    {
        $this->_mediator = $mediator;
    }

    /**
     * @return mixed
     */
    public function getMediator()
    {
        return $this->_mediator;
    }
}

class CDDriver extends Colleague
{
    private $_data;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->_data;
    }

    public function readCD()
    {
        $this->_data = 'design,pattern';

        $this->getMediator()->changed($this);
    }
}

class CPU extends Colleague
{
    private $_videoData;

    private $_soundData;

    /**
     * @return mixed
     */
    public function getVideoData()
    {
        return $this->_videoData;
    }

    /**
     * @return mixed
     */
    public function getSoundData()
    {
        return $this->_soundData;
    }

    public function executeData($data)
    {
        $dataArr = explode(',', $data);
        $this->_videoData = $dataArr[0];
        $this->_soundData = $dataArr[1];

        $this->getMediator()->changed($this);
    }
}

class VideoCard extends Colleague
{
    public function showData($data)
    {
        echo '您现在观看的是：' . $data;
    }
}

class SoundCard extends Colleague
{
    public function showData($data)
    {
        echo '画外音：' . $data;
    }
}



interface Mediator
{
    public function changed(Colleague $colleague);
}

class MotherBoard implements Mediator
{
    private $_cdDriver, $_CPU, $_videoCard, $_soundCard;

    /**
     * @param mixed $cdDriver
     */
    public function setCdDriver($cdDriver)
    {
        $this->_cdDriver = $cdDriver;
    }

    /**
     * @param mixed $cpu
     */
    public function setCPU(CPU $cpu)
    {
        $this->_CPU = $cpu;
    }

    /**
     * @param mixed $videoCard
     */
    public function setVideoCard($videoCard)
    {
        $this->_videoCard = $videoCard;
    }

    /**
     * @param mixed $soundCard
     */
    public function setSoundCard($soundCard)
    {
        $this->_soundCard = $soundCard;
    }

    private function openCDDriverReadData(CDDriver $cddriver)
    {
        $data = $cddriver->getData();
        $this->_CPU->executeData($data);
    }

    private function openCPU(CPU $cpu)
    {
        $videoData = $cpu->getVideoData();
        $soundData = $cpu->getSoundData();

        $this->_videoCard->showData($videoData);
        echo "\n";
        $this->_soundCard->showData($soundData);
    }

    public function changed(Colleague $colleague)
    {
        if ($colleague instanceof CDDriver) {
            $this->openCDDriverReadData($colleague);
        } elseif ($colleague instanceof CPU) {
            $this->openCPU($colleague);
        }
    }
}

class Client
{
    public static function main()
    {
        $mediator = new MotherBoard();

        $cd = new CDDriver($mediator);
        $cpu = new CPU($mediator);
        $videoCard = new VideoCard($mediator);
        $soundCard = new SoundCard($mediator);

        $mediator->setCdDriver($cd);
        $mediator->setCPU($cpu);
        $mediator->setSoundCard($soundCard);
        $mediator->setVideoCard($videoCard);

        $cd->readCD();
    }
}


Client::main();