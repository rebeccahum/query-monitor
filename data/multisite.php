<?php
/**
 * Multisite data transfer object.
 *
 * @package query-monitor
 */

class QM_Data_Multisite extends QM_Data {
	/**
	 * @var array<int, array<string, mixed>>
	 * @phpstan-var array<int, array{
	 *   new: int,
	 *   prev: int,
	 *   to: bool,
	 *   trace: QM_Backtrace,
	 * }>
	 */
	public $switches;
}
