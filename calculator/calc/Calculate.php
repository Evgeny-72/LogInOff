<?php

    class Calculate
    {
        public $first;
        public $second;
        public $calculate;

        public function __construct()
        {
            if ($_POST !== []) {
                $this->first = $_POST['first'];
                $this->second = $_POST['second'];
                $this->calculate = $_POST['calculate'];
            }
        }

        public function sum()
        {
            if (is_numeric($this->first) && is_numeric($this->second)) {
                return $this->first + $this->second;
            }
            echo 'калькулятор работает только с числами';
        }

        public function subtract()
        {
            if (is_numeric($this->first) && is_numeric($this->second)) {
                return $this->first - $this->second;
            }
            echo 'калькулятор работает только с числами';
        }

        public function multiply()
        {
            if (is_numeric($this->first) && is_numeric($this->second)) {
                return $this->first * $this->second;
            }
            echo 'калькулятор работает только с числами';
        }

        public function divide()
        {
            if ((int)$this->second === 0) {
                echo 'на ноль делить нельзя';
                return false;
            }
            if (is_numeric($this->first) && is_numeric($this->second)) {
                return $this->first / $this->second;
            }
            echo 'калькулятор работает только с числами';

        }
    }