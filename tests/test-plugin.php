<?php

class PluginTest extends WP_UnitTestCase
{

  // Check that that activation doesn't break
    public function test_plugin_activated()
    {
        $this->assertTrue(is_plugin_active(PLUGIN_PATH));
    }
}
