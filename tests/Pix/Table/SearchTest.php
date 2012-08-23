<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-23 at 11:22:56.
 */
class Pix_Table_SearchTest extends PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Pix_Table_Search::factory
     */
    public function testFactory()
    {
        $search = Pix_Table_Search::factory(1);

        $this->assertEquals(get_class($search), 'Pix_Table_Search');
    }

    /**
     * @covers Pix_Table_Search::search
     */
    public function testSearch()
    {
        $search = Pix_Table_Search::factory("condiction1");

        $this->assertEquals($search->getSearchCondictions(), array(array('string', 'condiction1')));

        $search = $search->search('condiction2');
        $this->assertEquals($search->getSearchCondictions(), array(array('string', 'condiction1'), array('string', 'condiction2')));
    }

    /**
     * @covers Pix_Table_Search::getSearchCondictions
     */
    public function testGetSearchCondictions()
    {
        $search = Pix_Table_Search::factory("condiction1");

        $this->assertEquals($search->getSearchCondictions(), array(array('string', 'condiction1')));
        $this->assertEquals($search->getSearchCondictions('string'), array(array('string', 'condiction1')));
    }

    /**
     * @covers Pix_Table_Search::isMapOnly
     * @todo   Implement testIsMapOnly().
     */
    public function testIsMapOnly()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Pix_Table_Search::order
     */
    public function testOrder()
    {
        $search = Pix_Table_Search::factory("condiction1");
        $search = $search->order('id');
        $this->assertEquals($search->order(), array('id' => 'asc'));

        $search = $search->order('id2');
        $this->assertEquals($search->order(), array('id2' => 'asc'));
    }

    /**
     * @covers Pix_Table_Search::limit
     */
    public function testLimit()
    {
        $search = Pix_Table_Search::factory("condiction1");
        $search = $search->limit(3);
        $this->assertEquals($search->limit(), 3);

        $search = $search->limit(null);
        $this->assertEquals($search->limit(), null);
    }

    /**
     * @covers Pix_Table_Search::index
     */
    public function testIndex()
    {
        $search = Pix_Table_Search::factory("condiction1");
        $search = $search->index('index1');
        $this->assertEquals($search->index(), 'index1');
    }

    /**
     * @covers Pix_Table_Search::offset
     */
    public function testOffset()
    {
        $search = Pix_Table_Search::factory("condiction1");
        $search = $search->offset(3);
        $this->assertEquals($search->offset(), 3);

        $search = $search->offset(null);
        $this->assertEquals($search->offset(), null);
    }

    /**
     * @covers Pix_Table_Search::after
     * @todo   Implement testAfter().
     */
    public function testAfter()
    {
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Pix_Table_Search::afterInclude
     * @todo   Implement testAfterInclude().
     */
    public function testAfterInclude()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Pix_Table_Search::before
     * @todo   Implement testBefore().
     */
    public function testBefore()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Pix_Table_Search::beforeInclude
     * @todo   Implement testBeforeInclude().
     */
    public function testBeforeInclude()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @covers Pix_Table_Search::reverseOrder
     */
    public function testReverseOrder()
    {
        $this->assertEquals(Pix_Table_Search::reverseOrder(array('id' => 'asc', 'id2' => 'desc')), array('id' => 'desc', 'id2' => 'asc'));
    }

    /**
     * @covers Pix_Table_Search::getOrderArray
     */
    public function testGetOrderArray()
    {
        $this->assertEquals(Pix_Table_Search::getOrderArray("id"), array('id' => 'asc'));
        $this->assertEquals(Pix_Table_Search::getOrderArray("id, id2"), array('id' => 'asc', 'id2' => 'asc'));
        $this->assertEquals(Pix_Table_Search::getOrderArray("id,id2"), array('id' => 'asc', 'id2' => 'asc'));
        $this->assertEquals(Pix_Table_Search::getOrderArray("id   ,   id2"), array('id' => 'asc', 'id2' => 'asc'));
        $this->assertEquals(Pix_Table_Search::getOrderArray("id DESC  ,   id2"), array('id' => 'desc', 'id2' => 'asc'));
        $this->assertEquals(Pix_Table_Search::getOrderArray(array('id', 'id2')), array('id' => 'asc', 'id2' => 'asc'));
        $this->assertEquals(Pix_Table_Search::getOrderArray(array('id' => 'desc', 'id2' => 'asc')), array('id' => 'desc', 'id2' => 'asc'));
    }
}
