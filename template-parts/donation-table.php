<?php

	$table = get_field( 'donation_table' );

	if ( $table ) {

    echo '<div class="donation-table-wrap">';

        if ( $table['header'] ) {

            echo '<div class="donation-table-header">';

                echo '<h4>';

                    foreach ( $table['header'] as $th ) {


                            echo $th['c'];

                    }

                echo '</h4>';

            echo '</div>';
        }

        echo '<div class="donation-table">';

            foreach ( $table['body'] as $tr ) {

            		echo '<a href="http://bit.ly/donatehelpus">';
	                echo '<div>';

	                    foreach ( $tr as $td ) {

	                            echo $td['c'];

	                    }

	                echo '</div>';
	              echo '</a>';
            }

        echo '</div>';

    echo '</div>';
	}

?>
