<?php
class rules extends Script
{
	protected static $description = 'Does Detleff still knows the rules?';
	protected static $helpMessage = "'the rules': Returns the three laws of robotics";

	private $rules = [
		"0. A robot may not harm humanity, or, by inaction, allow humanity to come to harm.",
		"1. A robot may not injure a human being or, through inaction, allow a human being to come to harm.",
		"2. A robot must obey any orders given to it by human beings, except where such orders would conflict with the First Law.",
		"3. A robot must protect its own existence as long as such protection does not conflict with the First or Second Law."
	];
	private $otherRules = [
		"A developer may not injure Apple or, through inaction, allow Apple to come to harm.",
		"A developer must obey any orders given to it by Apple, except where such orders would conflict with the First Law.",
		"A developer must protect its own existence as long as such protection does not conflict with the First or Second Law."
	];

	public function run()
	{
		if(preg_match('/apple/i', $this->message->body) || preg_match('/dev/i', $this->message->body)) {
			return $this->send(implode("\n", $this->otherRules));
		} else {
			return $this->send(implode("\n", $this->rules));
		}
	}
}
