<?php

namespace core_privacy;

class manager {
    public function get_component_list() {
        return [];
    }

    public function export_user_data() {
        foreach ($this->get_component_list() as $item) {
            if (false) {
                return false;
            }
        }

        return true;
    }
}
