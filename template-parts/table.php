<?php

	$table = get_field( 'donation_table' );

	if ( $table ) {

		echo '<table>';

				if ( $table['header'] ) {

						echo '<tr><th>';

								echo '<h4>';

										foreach ( $table['header'] as $th ) {


														echo $th['c'];

										}

								echo '</h4>';

						echo '</th></tr>';
				}

				echo '<tbody>';

						foreach ( $table['body'] as $tr ) {

							echo '<tr>';

									foreach ( $tr as $td ) {

													echo "<td>".$td['c']."</td>";

									}

							echo '</tr>';
						}

				echo '</tbody>';

		echo '</table>';
	}

?>
