<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PathsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PathsTable Test Case
 */
class PathsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PathsTable
     */
    public $Paths;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paths',
        'app.starting_sites',
        'app.ending_sites'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Paths') ? [] : ['className' => PathsTable::class];
        $this->Paths = TableRegistry::get('Paths', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paths);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
