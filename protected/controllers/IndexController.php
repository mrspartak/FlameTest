<?

class IndexController extends Flame\Mvc\Controller
{
	
	public function indexAction()
	{
		$this->render();
	}

	public function testAction()
	{
		$this->render(null, array(
			'test' => '123'
		));
	}
}