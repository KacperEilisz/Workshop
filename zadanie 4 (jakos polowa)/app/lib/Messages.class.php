<?php

class Messages {
	private $errors = [];

	public function addError($msg) {
		$this->errors[] = $msg;
	}

	public function isError() {
		return count($this->errors) > 0;
	}

	public function getErrors() {
		return $this->errors;
	}
}