<?php
/**
 * @copyright Copyright (c) 2016 Joas Schilling <coding@schilljs.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\FilesTrackDownloads\Tests\AppInfo;

use OCA\FilesTrackDownloads\Activity\Listener;
use OCA\FilesTrackDownloads\Activity\Provider;
use OCA\FilesTrackDownloads\Activity\Setting;
use OCA\FilesTrackDownloads\AppInfo\Application;
use OCA\FilesTrackDownloads\Tests\TestCase;
use OCP\Activity\IProvider;
use OCP\Activity\ISetting;

/**
 * Class ApplicationTest
 *
 * @package OCA\FilesTrackDownloads\Tests
 * @group DB
 */
class ApplicationTest extends TestCase {
	/** @var \OCA\FilesTrackDownloads\AppInfo\Application */
	protected $app;

	/** @var \OCP\AppFramework\IAppContainer */
	protected $container;

	protected function setUp(): void {
		parent::setUp();
		$this->app = new Application();
		$this->container = $this->app->getContainer();
	}

	public function testContainerAppName() {
		$this->app = new Application();
		$this->assertEquals('files_trackdownloads', $this->container->getAppName());
	}

	public function dataContainerQuery() {
		return [
			[Setting::class, Setting::class],
			[Setting::class, ISetting::class],
			[Provider::class, Provider::class],
			[Provider::class, IProvider::class],
			[Listener::class, Listener::class],
		];
	}

	/**
	 * @dataProvider dataContainerQuery
	 * @param string $service
	 * @param string $expected
	 */
	public function testContainerQuery($service, $expected) {
		$this->assertInstanceOf($expected, $this->container->query($service));
	}
}
