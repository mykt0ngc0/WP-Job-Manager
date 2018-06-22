<?php
class WP_Job_Manager_Email_Valid extends WP_Job_Manager_Email {
	/**
	 * Get the unique email notification key.
	 *
	 * @return string
	 */
	public static function get_key() {
		return 'valid_email';
	}

	/**
	 * Get the friendly name for this email notification.
	 *
	 * @return string
	 * @throws Exception When it hasn't been implemented in a subclass.
	 */
	public static function get_name() {
		return 'Test Email Notification';
	}

	/**
	 * Get the email subject.
	 *
	 * @return string
	 */
	public function get_subject() {
		return 'Test Subject';
	}

	/**
	 * Get `From:` address header value. Can be simple email or formatted `Firstname Lastname <email@example.com>`.
	 *
	 * @return string|bool Email from value or false to use WordPress' default.
	 */
	public function get_from() {
		return 'From Name <from@example.com>';
	}

	/**
	 * Get array or comma-separated list of email addresses to send message.
	 *
	 * @return string|array
	 */
	public function get_to() {
		return 'to@example.com';
	}

	/**
	 * Get the rich text version of the email content.
	 *
	 * @return string
	 */
	public function get_rich_content() {
		$args = $this->get_args();
		return "<strong>" . wp_kses_post( $args['test'] ) . "</strong>";
	}

	/**
	 * Checks the arguments and returns whether the email notification is properly set up.
	 *
	 * @return bool
	 */
	public function is_valid() {
		$args = $this->get_args();
		return isset( $args['test'] );
	}
}
