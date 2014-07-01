<?php
require_once 'Partial.php';

class View {

    const KEY_MAIN = 'main';
    const KEY_SUB = 'sub';
    const KEY_TITLE = 'title';
    const KEY_URL = 'url';
    const KEY_CLASS = 'class';
    const KEY_HEADER = 'header';
    const KEY_INFO = 'info';
	const KEY_DEFAULT = 'default';
	
	const DEFAULT_TITLE = 'SilikonUni';
	
	const FOLDER_IMAGES = 'images/';
	const FOLDER_CSS = 'styles/';
	const FOLDER_PARTIALS = 'templates/partials/';

    private $_pages = array(
		array(
			self::KEY_MAIN => array(
				self::KEY_URL => 'news.php',
				self::KEY_TITLE => 'news',
				self::KEY_HEADER => 'Новини',
				self::KEY_SUB => false
			)
		),
		array(
			self::KEY_MAIN => array(
				self::KEY_URL => '#',
				self::KEY_TITLE => 'About the university',
				self::KEY_HEADER => 'За университета',
				self::KEY_SUB => array(
					array(
						self::KEY_URL => 'aboutus.php',
						self::KEY_TITLE => 'about us',
						self::KEY_HEADER => 'За нас',
					),
					array(
						self::KEY_URL => 'partners.php',
						self::KEY_TITLE => 'partners',
						self::KEY_HEADER => 'Партньори',
					),
					array(
						self::KEY_URL => 'trainers.php',
						self::KEY_TITLE => 'trainers',
						self::KEY_HEADER => 'Преподаватели',
					),
					array(
						self::KEY_URL => 'applying.php',
						self::KEY_TITLE => 'applying',
						self::KEY_HEADER => 'Кандидатстване',
					),
				)
			)
		),
		array(
			self::KEY_MAIN => array(
				self::KEY_URL => 'trainings.php',
				self::KEY_TITLE => 'trainings',
				self::KEY_HEADER => 'Обучения',
				self::KEY_SUB => array(
					array(
						self::KEY_URL => 'trainings.php#chalga',
						self::KEY_TITLE => 'chalga',
						self::KEY_HEADER => 'Чалга примадона',
					),
					array(
						self::KEY_URL => 'trainings.php#greek',
						self::KEY_TITLE => 'greek',
						self::KEY_HEADER => 'Хит певец на гръцки песни',
					),
					array(
						self::KEY_URL => 'trainings.php#travestite',
						self::KEY_TITLE => 'travestite',
						self::KEY_HEADER => 'Как да стана известен травестит',
					),
					array(
						self::KEY_URL => 'trainings.php#fastTrack',
						self::KEY_TITLE => 'fast track',
						self::KEY_HEADER => 'Fast track курсове',
					),
					array(
						self::KEY_URL => 'trainings.php#threeWeeks',
						self::KEY_TITLE => 'three weeks',
						self::KEY_HEADER => 'Стани звезда за три седмици',
					),
				)
			)
		),
		array(
			self::KEY_MAIN => array(
				self::KEY_URL => 'contacts.php',
				self::KEY_TITLE => 'contacts',
				self::KEY_HEADER => 'Контакти',
				self::KEY_SUB => false
			)
		)
    );
	
	private $_footerPages = array(
		array(
			self::KEY_MAIN => array(
				self::KEY_URL => '#',
				self::KEY_TITLE => 'About the university',
				self::KEY_HEADER => 'За университета',
				self::KEY_SUB => array(
					array(
						self::KEY_URL => 'aboutus.php',
						self::KEY_TITLE => 'about us',
						self::KEY_HEADER => 'За нас',
					),
					array(
						self::KEY_URL => 'partners.php',
						self::KEY_TITLE => 'partners',
						self::KEY_HEADER => 'Партньори',
					),
					array(
						self::KEY_URL => 'trainers.php',
						self::KEY_TITLE => 'trainers',
						self::KEY_HEADER => 'Преподаватели',
					),
					array(
						self::KEY_URL => 'applying.php',
						self::KEY_TITLE => 'applying',
						self::KEY_HEADER => 'Кандидатстване',
					),
				)
			)
		),
		array(
			self::KEY_MAIN => array(
					self::KEY_URL => '#',
					self::KEY_TITLE => 'Friends',
					self::KEY_HEADER => 'Приятели',
					self::KEY_SUB => array(
						array(
							self::KEY_URL => 'http://bg.wikipedia.org/wiki/%D0%9F%D0%B0%D0%B9%D0%BD%D0%B5%D1%80',
							self::KEY_TITLE => 'Mitko Paynera',
							self::KEY_HEADER => 'Митко Димитров - Пайнера',
						),
						array(
							self::KEY_URL => 'http://www.plastichna-hirurgia.bg/',
							self::KEY_TITLE => 'd-r mEnchev',
							self::KEY_HEADER => 'Д-р Менчев',
						),
						array(
							self::KEY_URL => 'http://pishtova.info/',
							self::KEY_TITLE => 'Mitio Pishtova',
							self::KEY_HEADER => 'Митьо Пищова',
						),
						array(
							self::KEY_URL => 'http://www.24chasa.bg/Article.asp?ArticleId=1507232',
							self::KEY_TITLE => 'trainers',
							self::KEY_HEADER => 'Коко Динев',
						),
						array(
							self::KEY_URL => 'http://www.sincity-bg.com/',
							self::KEY_TITLE => 'applying',
							self::KEY_HEADER => 'Син Сити',
						)
					)
				
			)
		)
	);
	
	private $_css = array(
		self::KEY_DEFAULT => 'styles.css'
	);
	
	private $_partials;
	

    public function isCurrent($page) {
        return $page == basename($_SERVER['PHP_SELF']);
    }

    public function getPages() {
        return $this->_pages;
    }
	
	public function getCss($css = null) {
		if ($css) {
			return array_key_exists($css, $this->_css) ? $this->_css[$css] : $this->_css[self::KEY_DEFAULT];
		}
		return $this->_css;
	}
	
	public function getTitle() {
		foreach ($this->getPages() as $pages) {
			if ($this->isCurrent($pages[self::KEY_MAIN][self::KEY_URL])) {
				return $pages[self::KEY_MAIN][self::KEY_TITLE];
			}
		}
		return self::DEFAULT_TITLE;
	}
	
	/**
	 * 
	 * @return Partial
	 */
	public function partial() {
		if (!$this->_partials) {
			$this->_partials = new Partial($this);
		}
		return $this->_partials;
	}
	
	public function getFooterPages() {
		return $this->_footerPages;
	}
    
    public function setCss($css) {
        $this->_css[] = $css;
    }




}