
<?php

    class Account {
        public function __construct(
            public string $name,
            public float $balance
            ){}


        public function deposit(float $amount){
            $this->balance += $amount;

            return $this;
        }
    }

