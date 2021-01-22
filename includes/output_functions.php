<?php	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/Spreadsheet/Excel/Writer.php");


	function Student_Export_XLS($student_array) {
		//ob_clean();

		/*if (!empty($student_array)) {
			foreach ($student_array as $obj) {
				//echo $obj->id;

			}
		}*/
				// We give the path to our file here
				$filename = "TEsT_" . date('Y_m_d_H_i').".xls";

				$workbook = new Spreadsheet_Excel_Writer(); 
				$workbook->setVersion(8);
				
				$format_bold = $workbook->addFormat();
				$format_border = $workbook->addFormat();
				$format_underline = $workbook->addFormat();
				
				$format_border_header = $workbook->addFormat(array('Border' => 1, 'BorderColor' => 'black', 'Size' => 10, 'Align' => 'left', 'Bold' => 1, 'Underline' => 0, 'Color' => 'black', 'Pattern' => 1, 'FgColor' => 'white'));
				
				$format_border1_left = $workbook->addFormat(array('Border' => 1, 'BorderColor' => 'black', 'Size' => 10, 'Align' => 'left', 'Bold' => 0, 'Underline' => 0, 'Color' => 'black', 'Pattern' => 1, 'FgColor' => 'white'));
				
				$format_border1_right = $workbook->addFormat(array('Border' => 1, 'BorderColor' => 'black', 'Size' => 11, 'Align' => 'right', 'Bold' => 0, 'Underline' => 0, 'Color' => 'black', 'Pattern' => 1, 'FgColor' => 'white'));
				
				$format_bold->setBold();
				$format_border->setBorder(1); // Set and add border width
				$format_border->setBorderColor('black'); // set and add color to border
				$format_underline->setUnderline(1); // 1 = single underline / 2 = double underline
				
				$worksheet1 = $workbook->addWorksheet("Media Group Offer");						
				$worksheet1->setInputEncoding('utf-8');

				$ws1_x = 0; // Zeilen
				$ws1_y = 0; // Spalten
				
				//
				// Logo
				//
				//$worksheet1->insertBitmap($ws1_x, $ws1_y + 6, "https://dev.media-sc.com/siteimg/logo.png", 0, 0, 0.8, 0.8);

				$ws1_x++;
				$worksheet1->write($ws1_x, $ws1_y, "Offer:", NULL);
				$worksheet1->write($ws1_x, $ws1_y + 1, "Onana", 0);
				
				$ws1_x++;
				$worksheet1->write($ws1_x, $ws1_y, "Customer:", NULL);
				$worksheet1->write($ws1_x, $ws1_y + 1, "Boakye", 0);
				
				$ws1_x++;
				$worksheet1->write($ws1_x, $ws1_y, "Created by:", NULL);
				$worksheet1->write($ws1_x, $ws1_y + 1, "Kumasi", 0);

				$ws1_x++;
				$ws1_x++;
				
				$worksheet1->write($ws1_x, $ws1_y, "Country", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 1, "Continent", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 2, "Shipment Provider", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 3, "Product", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 4, "Qty", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 5, "Weight (g)", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 6, "Weight from", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 7, "Weight to", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 8, "Price/Item", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 9, "Price/Kilo", $format_border_header);
				$worksheet1->write($ws1_x, $ws1_y + 10, "Total Price", $format_border_header);


				// We still need to explicitly close the workbook
				$workbook->send($filename); 
				$workbook->close();  
			//}end foreach ($student_array as $obj)	
		//}  end if (!empty($student_array))

//echo "$student_array";
		exit();	
	}
	
	
?>