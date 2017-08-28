<?php # -*- coding: utf-8 -*-

namespace Inpsyde\WpStash;

interface MultisiteKeyGen extends KeyGen {

	public function add_global_groups( $groups ): array;

	public function switch_to_blog( int $blog_id ): bool;
}