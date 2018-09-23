
$(document).on({
  change: function() {
   // Check if value is unite arab emirate then 
	//var contry = $(this).val();
	
	var contry = $(this).val();
	
	var countryNode = $( "#country option:selected" ).text();
	
	$("#country_node").val(countryNode);
	
	
	// IF value is AE
	if(contry == 'AE') {
		
			// Append the html to the dom document 
			
var myvar = '<label class="col-md-2 control-label">City'+
'<span class="required"> * </span>'+
'</label>'+
''+
'<div class="col-md-4">'+
'<select name="city1" id="city" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="DXB">Dubai</option>'+
'   <option value="AUH">Abu Dhabi</option>'+
'   <option value="AAN">Al Ain</option>'+
'   <option value="QAJ">Ajman</option>'+
'   <option value="FJR">Fujairah</option>'+
'   <option value="SHJ">Sharjah</option>'+
'   <option value="RKT">Ras Al Khaimah</option>'+
'   <option value="QIW">Um Al Quiwan</option>'+
'</select>'+
'</div>';

		// Append in this id append-city-here
		$('#append_city').append(myvar);

		}

  }
}, '#country');

$(document).on({
  change: function() {
    
    // check the value 
    var area = $(this).val();
    
    // Get the select area 
    var areaselect = '<label class="col-md-2 control-label">Area <span class="required"> * </span></label><div class="col-md-4">';
    
    // Switch the statement 
    switch ( area ) {
		
		case 'DXB':
		
		areaselect += '<select name="AddressArea1" id="area-250" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="181">Abu Hail</option>'+
'   <option value="182">Acacia Avenues</option>'+
'   <option value="183">AL Badaa</option>'+
'   <option value="184">Al Baraha</option>'+
'   <option value="185">Al Barsha</option>'+
'   <option value="186">Al Buteen</option>'+
'   <option value="188">Al Furjan</option>'+
'   <option value="189">Al Garhoud</option>'+
'   <option value="190">Al Hamriya</option>'+
'   <option value="191">Al Hudaiba</option>'+
'   <option value="192">Al Jaddaf</option>'+
'   <option value="193">Al Jafiliya</option>'+
'   <option value="194">Al Kaheel</option>'+
'   <option value="195">Al Karama</option>'+
'   <option value="196">Al Khabisi</option>'+
'   <option value="197">Al Khawaneej</option>'+
'   <option value="198">Al Kifaf</option>'+
'   <option value="199">Al Manara</option>'+
'   <option value="201">Al Meydan City</option>'+
'   <option value="203">Al Mizhar</option>'+
'   <option value="204">Al Muraqqabat</option>'+
'   <option value="205">Al Murar</option>'+
'   <option value="206">Al Muteena</option>'+
'   <option value="207">Al Nahda</option>'+
'   <option value="208">Al Nasr</option>'+
'   <option value="209">Al Quoz</option>'+
'   <option value="210">Al Qusais</option>'+
'   <option value="211">Al Raffa</option>'+
'   <option value="212">Al Rashidiya</option>'+
'   <option value="213">Al Rigga</option>'+
'   <option value="214">Al Safa</option>'+
'   <option value="215">Al Satwa</option>'+
'   <option value="216">Al Souk</option>'+
'   <option value="217">Al Sufouh</option>'+
'   <option value="218">Al Tawar</option>'+
'   <option value="219">Al Warqaa</option>'+
'   <option value="220">Bukadra</option>'+
'   <option value="221">Bur Dubai</option>'+
'   <option value="222">Business Bay</option>'+
'   <option value="223">City of Arabia</option>'+
'   <option value="224">Corniche Deira</option>'+
'   <option value="225">Culture Village</option>'+
'   <option value="226">Deira Dubai</option>'+
'   <option value="227">Discovery Gardens</option>'+
'   <option value="228">Downtown Dubai</option>'+
'   <option value="229">Downtown Jebel Ali</option>'+
'   <option value="230">Dubai BioTechnology And Research Park</option>'+
'   <option value="231">Dubai Festival City</option>'+
'   <option value="232">Dubai Industrial City</option>'+
'   <option value="233">Dubai International Academic City</option>'+
'   <option value="234">Dubai International Financial Center</option>'+
'   <option value="235">Dubai Investment Park 1</option>'+
'   <option value="236">Dubai Investment Park 2</option>'+
'   <option value="237">Dubai Land</option>'+
'   <option value="238">Dubai Maritime City</option>'+
'   <option value="239">Dubai Pearl</option>'+
'   <option value="241">Dubai Silicon Oasis</option>'+
'   <option value="242">Dubai Sports City</option>'+
'   <option value="243">Dubai Waterfront</option>'+
'   <option value="244">Dubai World Central</option>'+
'   <option value="245">Emirates Hills</option>'+
'   <option value="246">Gold Souk</option>'+
'   <option value="247">Hor Al Anz</option>'+
'   <option value="248">International City</option>'+
'   <option value="249">International City Phase 3</option>'+
'   <option value="250">International Media Production Zone</option>'+
'   <option value="251">Jebel Ali Industrial Areas</option>'+
'   <option value="252">Jebel Ali Village</option>'+
'   <option value="253">Jumeirah</option>'+
'   <option value="254">Jumeirah Beach Residence</option>'+
'   <option value="255">Jumeirah Golf Estate</option>'+
'   <option value="256">Jumeirah Islands</option>'+
'   <option value="257">Jumeirah Lake Towers</option>'+
'   <option value="258">Jumeirah Park</option>'+
'   <option value="259">Jumeirah Village South</option>'+
'   <option value="260">Jumeirah Village Triangle</option>'+
'   <option value="261">Madina Badr</option>'+
'   <option value="262">Mankhool</option>'+
'   <option value="263">Marina</option>'+
'   <option value="264">Marsa Al Khor Business Park</option>'+
'   <option value="265">Mirdiff</option>'+
'   <option value="266">Muhaisanah</option>'+
'   <option value="267">Musallah Al Eid</option>'+
'   <option value="268">Mushrif Heights</option>'+
'   <option value="269">Mushrif Park</option>'+
'   <option value="270">Nadd Al Hamar</option>'+
'   <option value="271">Nad Al Sheba</option>'+
'   <option value="272">Nadd Shamma</option>'+
'   <option value="273">Naif</option>'+
'   <option value="274">Oud Al Muteena</option>'+
'   <option value="275">Port Saeed</option>'+
'   <option value="276">Ras Al Khor</option>'+
'   <option value="277">Sheikh Zayed Road</option>'+
'   <option value="279">Tecom</option>'+
'   <option value="280">Textile City</option>'+
'   <option value="281">Gardens</option>'+
'   <option value="282">Greens</option>'+
'   <option value="283">Lagoons</option>'+
'   <option value="285">Meadows</option>'+
'   <option value="286">Old Town</option>'+
'   <option value="287">Palm Deira</option>'+
'   <option value="288">Palm Jabel Ali</option>'+
'   <option value="289">Palm Jumeirah</option>'+
'   <option value="290">Springs</option>'+
'   <option value="291">Views</option>'+
'   <option value="292">Villa</option>'+
'   <option value="293">World</option>'+
'   <option value="294">Tijara Town</option>'+
'   <option value="295">Umm Hurair 1</option>'+
'   <option value="296">Umm Hurair 2</option>'+
'   <option value="297">Umm Ramool</option>'+
'   <option value="298">Umm Sheif</option>'+
'   <option value="299">Umm Suqeim</option>'+
'   <option value="300">Uptown Motor City</option>'+
'   <option value="301">Wadi Al Mardi</option>'+
'   <option value="302">Warsan Estate</option>'+
'   <option value="303">Zabeel</option>'+
'   <option value="304">Other</option>'+
'   <option value="305">Greens community</option>'+
'   <option value="306">Arabian Ranches</option>'+
'   <option value="566">Downtown Burj Dubai</option>'+
'   <option value="567">Dubai Autodrome & Business Park</option>'+
'   <option value="568">Dubai Healthcare City</option>'+
'   <option value="570">Dubai Internet City</option>'+
'   <option value="571">Dubai Media City</option>'+
'   <option value="573">Global Village</option>'+
'   <option value="574">Golf Gardens</option>'+
'   <option value="575">Green Community</option>'+
'   <option value="576">Jebel Ali Free Zone Authority</option>'+
'   <option value="577">Jumeirah Village Circle</option>'+
'   <option value="578">Knowledge Village</option>'+
'   <option value="579">Mina Al Arab</option>'+
'   <option value="580">Sonapur</option>'+
'   <option value="581">The World Islands</option>'+
'   <option value="582">Dubai Outsource Zone</option>'+
'   <option value="583">Ducamz</option>'+
'   <option value="1004">Bank Street Burdubai</option>'+
'   <option value="1005">Khalid Bin Waleed</option>'+
'   <option value="1006">Textile Market</option>'+
'   <option value="1007">Meena Bazar</option>'+
'   <option value="1008">Creek Road</option>'+
'   <option value="1009">Old & New Consulate Areas</option>'+
'   <option value="1010">Al Ghubaiba</option>'+
'   <option value="1011">Port Rashid</option>'+
'   <option value="1012">Dubai Immigration</option>'+
'   <option value="1013">Rolla Street</option>'+
'   <option value="1014">Golden Sands</option>'+
'   <option value="1015">Sheikh Hamdan Colony</option>'+
'   <option value="1016">Zabeel Park</option>'+
'   <option value="1017">Karama Center</option>'+
'   <option value="1018">Karama Post Office</option>'+
'   <option value="1019">Oud Metha</option>'+
'   <option value="1020">Rashid Hospital</option>'+
'   <option value="1021">Dubai Courts</option>'+
'   <option value="1022">Wafi City</option>'+
'   <option value="1023">Lamcy Plaza</option>'+
'   <option value="1024">Latifa Hospital</option>'+
'   <option value="1025">Al-Wasl Road</option>'+
'   <option value="1026">Jumeirah Beach Road</option>'+
'   <option value="1027">Mazaya Center</option>'+
'   <option value="1028">Police Colony</option>'+
'   <option value="1029">Dubai Petroleum</option>'+
'   <option value="1030">Al-Safa-1</option>'+
'   <option value="1031">Al-Safa-2</option>'+
'   <option value="1032">Safa Park</option>'+
'   <option value="1033">Burj Al-Arab</option>'+
'   <option value="1034">Jumeirah Beach Hotel</option>'+
'   <option value="1035">Emaar Square</option>'+
'   <option value="1036">Dubai Mall</option>'+
'   <option value="1037">Humanitarian City</option>'+
'   <option value="1038">Emirates towers</option>'+
'   <option value="1039">Dubai World Trade Center</option>'+
'   <option value="1040">Al Qouz Industrial Area</option>'+
'   <option value="1041">Khaleej Times</option>'+
'   <option value="1042">Al Khail Gate</option>'+
'   <option value="1043">New Grand City Mall</option>'+
'   <option value="1044">Al Marabea Street</option>'+
'   <option value="1045">Oasis Center</option>'+
'   <option value="1046">Time Square</option>'+
'   <option value="1047">Al Qouz Mall</option>'+
'   <option value="1048">Sidar Hospital</option>'+
'   <option value="1049">Jebel Ali Police Station</option>'+
'   <option value="1050">Jebel Ali Shooting Club</option>'+
'   <option value="1051">Techno Park</option>'+
'   <option value="1052">Logistic City</option>'+
'   <option value="1053">Ducab</option>'+
'   <option value="1054">Dugas</option>'+
'   <option value="1055">Studio City</option>'+
'   <option value="1056">Remraam</option>'+
'   <option value="1057">Layan Community</option>'+
'   <option value="1058">International Cricket Stadium</option>'+
'   <option value="1059">Police Academy</option>'+
'   <option value="1060">Souq Madinat Al-Jumeirah</option>'+
'   <option value="1061">Dubal</option>'+
'   <option value="1062">Jebel Ali DEWA</option>'+
'   <option value="1063">Dubai College</option>'+
'   <option value="1064">Barsha South</option>'+
'   <option value="1065">The Lakes</option>'+
'   <option value="1066">DMCC</option>'+
'   <option value="1067">Emaar Business Park</option>'+
'   <option value="1068">Emirates Golf Club</option>'+
'   <option value="1069">The Club House</option>'+
'   <option value="1070">Jebel Ali Race Course</option>'+
'   <option value="1071">Coral Botique Villas</option>'+
'   <option value="1072">Dubai American Academy</option>'+
'   <option value="1073">Baniyas Road</option>'+
'   <option value="1074">Maktoum Road</option>'+
'   <option value="1075">Salahuddin Road</option>'+
'   <option value="1076">Nakheel </option>'+
'   <option value="1077">Naser Square</option>'+
'   <option value="1078">Ayal Naser</option>'+
'   <option value="1079">Murshid Bazar</option>'+
'   <option value="1080">Fish Market</option>'+
'   <option value="1081">Hayat Regency</option>'+
'   <option value="1083">Sabka Bus Station</option>'+
'   <option value="1084">Al Ras</option>'+
'   <option value="1085">Deira Abra</option>'+
'   <option value="1086">Business Village Area</option>'+
'   <option value="1088">Deira City Center</option>'+
'   <option value="1089">Dnata</option>'+
'   <option value="1090">Mamzar</option>'+
'   <option value="1091">Hamriya Port</option>'+
'   <option value="1092">Dubai Hospital</option>'+
'   <option value="1093">Al Wahida</option>'+
'   <option value="1094">Qusais Industrial Area</option>'+
'   <option value="1095">Lulu Village</option>'+
'   <option value="1096">Dubai Taxi HQ</option>'+
'   <option value="1097">Etisalat Academy</option>'+
'   <option value="1098">Zulekha Hospital</option>'+
'   <option value="1099">Al Mulla Plaza</option>'+
'   <option value="1100">Dubai Police HQ</option>'+
'   <option value="1101">Damascus Street</option>'+
'   <option value="1102">Baghdad Street</option>'+
'   <option value="1103">Dubai Golf Club</option>'+
'   <option value="1104">Garhoud Residence Area</option>'+
'   <option value="1105">Airport Terminal 1,2,3</option>'+
'   <option value="1106">Cargo Village</option>'+
'   <option value="1107">Dubai Flower Center</option>'+
'   <option value="1108">DAFZA</option>'+
'   <option value="1109">Samari Village</option>'+
'   <option value="1110">Al Gandhi Complex</option>'+
'   <option value="1111">Vegetable Market</option>'+
'   <option value="1112">Al-Warsan</option>'+
'   <option value="1113">Al-Aweer RTA Depo</option>'+
'   <option value="1114">Al-Aweer Residential Area</option>'+
'   <option value="1115">Dubai Outlet Mall</option>'+
'   <option value="1116">Mizhar</option>'+
'   <option value="1117">Al Maha Resort</option>'+
'   <option value="1118">Skycourts</option>'+
'   <option value="1312">Uptown Mirdif</option>'+
'</select>';

		break;
		
		case 'AUH':
		
		areaselect += '<select name="AddressArea1" id="area-250" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="307">Airport Street</option>'+
'   <option value="309">Al Bateen</option>'+
'   <option value="310">Al Bateen Airport</option>'+
'   <option value="311">Al Dhafrah</option>'+
'   <option value="312">Al Hosn</option>'+
'   <option value="313">Al Karamah</option>'+
'   <option value="314">Al Khalidiyah</option>'+
'   <option value="315">Al Khubeirah</option>'+
'   <option value="317">AL Mafraq Industrial Area</option>'+
'   <option value="318">Al Manhal</option>'+
'   <option value="319">Maqta Bridge</option>'+
'   <option value="320">Al Markaziya</option>'+
'   <option value="322">Al Mushrif</option>'+
'   <option value="324">Al Raha Beach</option>'+
'   <option value="325">Al Reef Downtown</option>'+
'   <option value="326">Al Reef Villas</option>'+
'   <option value="327">Al Reem Island</option>'+
'   <option value="328">Al Riyadiya</option>'+
'   <option value="329">Al Rowdah</option>'+
'   <option value="330">Al Tabbiyah</option>'+
'   <option value="332">Building Material City</option>'+
'   <option value="333">Central Market</option>'+
'   <option value="334">Coconut Island</option>'+
'   <option value="336">Danet Gateway</option>'+
'   <option value="338">Hadbat Al Zaafran</option>'+
'   <option value="339">Hoderiyyat</option>'+
'   <option value="340">Hydra Golf Walk</option>'+
'   <option value="341">Hydra Village</option>'+
'   <option value="342">Industrial City Of Abu Dhabi</option>'+
'   <option value="343">Khalifa City-A</option>'+
'   <option value="344">Khalifa Street</option>'+
'   <option value="345">Khor Al Maqta</option>'+
'   <option value="346">Lulu Island</option>'+
'   <option value="347">Madinat Zayed</option>'+
'   <option value="348">Mangrove Village</option>'+
'   <option value="349">Marina Village</option>'+
'   <option value="350">Mina Zayed Port</option>'+
'   <option value="351">Mohammed Bin Zayed City</option>'+
'   <option value="352">Mushayrib Island</option>'+
'   <option value="353">Mussafah</option>'+
'   <option value="355">Nurai Island</option>'+
'   <option value="356">Officers City</option>'+
'   <option value="357">Qasr Al Sarab</option>'+
'   <option value="358">Qasr El Bahr</option>'+
'   <option value="359">Ras Al Akhdar</option>'+
'   <option value="360">Saadiyat Island</option>'+
'   <option value="361">Salam Street</option>'+
'   <option value="362">Saraya</option>'+
'   <option value="363">Garden Tower</option>'+
'   <option value="365">Other</option>'+
'   <option value="366">Al Raha Gardens</option>'+
'   <option value="1119">Old Mazda Road</option>'+
'   <option value="1120">Khalifa Energy Complex</option>'+
'   <option value="1121">Hamdan Street</option>'+
'   <option value="1122">Abu-Dhabi Mall</option>'+
'   <option value="1123">Al-Najda Street</option>'+
'   <option value="1124">Ziany Area</option>'+
'   <option value="1125">Hamdan Post Office</option>'+
'   <option value="1126">Electra Street</option>'+
'   <option value="1127">Khalifa Park</option>'+
'   <option value="1128">Officer Club</option>'+
'   <option value="1129">Zayed Sports City</option>'+
'   <option value="1130">Abu-Dhabi Muncipality</option>'+
'   <option value="1131">Abu-Dhabi Indian School</option>'+
'   <option value="1132">Al-Naser Street</option>'+
'   <option value="1133">Corniche</option>'+
'   <option value="1134">Marina Mall</option>'+
'   <option value="1135">Istiklal Street</option>'+
'   <option value="1136">Baynoonah Street</option>'+
'   <option value="1137">Khalidiya Mall</option>'+
'   <option value="1138">Khalidiya Village</option>'+
'   <option value="1139">Emirates Palace Hotel</option>'+
'   <option value="1140">Bateen Towers</option>'+
'   <option value="1141">Carrefour</option>'+
'   <option value="1142">Zaab Area</option>'+
'   <option value="1143">SKMC</option>'+
'   <option value="1144">Al-Khaleej Al-Arabi St</option>'+
'   <option value="1145">Int\'l school of Choueifat </option>'+
'   <option value="1146">Al-Saada Street</option>'+
'   <option value="1147">Embassy Area</option>'+
'   <option value="1148">Al-Falah street</option>'+
'   <option value="1149">Abu-Dhabi Exhibition Centre (ADNEC)</option>'+
'   <option value="1150">Al-Noor Hospital</option>'+
'   <option value="1151">Abu-Dhabi Police Academy</option>'+
'   <option value="1152">Police College</option>'+
'   <option value="1153">Abu-Dhabi Traffic</option>'+
'   <option value="1154">Defence Road</option>'+
'   <option value="1155">Al-Nahyan Camp Area</option>'+
'   <option value="1156">Delma Street</option>'+
'   <option value="1157">Abu-Dhabi Bus Station</option>'+
'   <option value="1158">Al Wahda Mall Area</option>'+
'   <option value="1159">Abu Dhabi Media Co</option>'+
'   <option value="1160">Hazza Bin Zayed Street</option>'+
'   <option value="1161">Al-Dhafra Air Base Area</option>'+
'   <option value="1162">Mussafah Industrial Area</option>'+
'   <option value="1163">Mussafah Shabia</option>'+
'   <option value="1164">Mussafah Police Station Area</option>'+
'   <option value="1165">Emirates Driving Co.</option>'+
'   <option value="1166">Abu-Dhabi Golf club & Resort</option>'+
'   <option value="1167">Khalifha City- B</option>'+
'   <option value="1168">Between The Bridges</option>'+
'   <option value="1169">Umm Al Nar</option>'+
'   <option value="1170">SAS Al Nakheel</option>'+
'   <option value="1171">Petrolium Institute</option>'+
'   <option value="1172">Abu-Dhabi Motor co</option>'+
'   <option value="1173">Baniyas (East)</option>'+
'   <option value="1174">Baniyas (West)</option>'+
'   <option value="1175">Rahba</option>'+
'   <option value="1176">Yas Island</option>'+
'   <option value="1177">Ferrari World</option>'+
'   <option value="1178">Al-Dar Lang </option><div class="col-md-4">'+
'   <option value="1179">Old Shahamma</option>'+
'   <option value="1180">New Shahamma</option>'+
'   <option value="1181">Al-Shamkha</option>'+
'   <option value="1182">Shwamakh</option>'+
'   <option value="1183">Samha Area</option>'+
'   <option value="1184">Al-Bahia -A</option>'+
'   <option value="1185">Al-Bahia -B</option>'+
'   <option value="1186">Al-Falah City</option>'+
'   <option value="1187">Abu-Dhabi Int\'l Airport</option>'+
'   <option value="1188">Masdar City</option>'+
'   <option value="1189">Suwa Island</option>'+
'</select>';

		break;
		
		case 'AAN':
		
		 areaselect += '<select name="AddressArea1" id="area-250" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="542">Zakher</option>'+
'   <option value="543">Al Foah</option>'+
'   <option value="544">Al Jimi</option>'+
'   <option value="545">Al Maqam</option>'+
'   <option value="546">Sarooj</option>'+
'   <option value="547">New Manasir</option>'+
'   <option value="1246">Al-Mutawaa</option>'+
'   <option value="1247">Al-Mutarad</option>'+
'   <option value="1248">Al-Muwaiji</option>'+
'   <option value="1249">Al-Bateen</option>'+
'   <option value="1250">Gafat Al-Nayyar</option>'+
'   <option value="1251">Al-Grayyeh</option>'+
'   <option value="1252">Central Destrict</option>'+
'   <option value="1253">Al-Ain Zoo</option>'+
'   <option value="1254">Jebel hafeet</option>'+
'   <option value="1255">Al-Tawia</option>'+
'   <option value="1256">Al-Badiya Park</option>'+
'   <option value="1257">Hilli Archaeological Park</option>'+
'   <option value="1258">Al-Masoudi</option>'+
'   <option value="1259">Sheikh Tahnoon Stadium Sport Club</option>'+
'   <option value="1260">Al-Ain Fun City</option>'+
'   <option value="1261">Al-Falaj</option>'+
'   <option value="1262">Sanaya</option>'+
'   <option value="1682">Al Yahar</option>'+
'   <option value="1683">Al Salamat</option>'+
'   <option value="1684">Al Saad</option>'+
'   <option value="1685">Al Shwaib</option>'+
'   <option value="1686">Al Dhaher</option>'+
'   <option value="1687">Abu Samra</option>'+
'   <option value="1688">Sweihan</option>'+
'   <option value="1689">Shiab Al Ashkhar</option>'+
'   <option value="1690">Green Mubazzarah</option>'+
'   <option value="1691">Airport District</option>'+
'   <option value="1692">Um Ghafa</option>'+
'   <option value="1693">Neima</option>'+
'</select>';

		break;
		
		case 'QAJ':
		
		areaselect += ' <select name="AddressArea1" id="area-250" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="433">Ain Ajman</option>'+
'   <option value="434">Ajman Marina</option>'+
'   <option value="435">Ajman Meadows</option>'+
'   <option value="436">Ajman Uptown</option>'+
'   <option value="437">Ajman Villas</option>'+
'   <option value="438">Al Ameera Village</option>'+
'   <option value="439">Al Bustan</option>'+
'   <option value="440">Al Butain</option>'+
'   <option value="441">Al Hamidiya</option>'+
'   <option value="442">Al Helio City</option>'+
'   <option value="443">Al Humaid City</option>'+
'   <option value="444">Al Ittihad Village</option>'+
'   <option value="446">Al Jerf Gardens</option>'+
'   <option value="447">Al Karama Ajman</option>'+
'   <option value="448">Al Karama Area</option>'+
'   <option value="449">Al Man1 Tower</option>'+
'   <option value="450">Al Nakhil</option>'+
'   <option value="451">Al Noor Tower Ajman</option>'+
'   <option value="452">Al Owan</option>'+
'   <option value="453">Al Rashidia</option>'+
'   <option value="454">Al Rumaila</option>'+
'   <option value="455">Al Zorah</option>'+
'   <option value="456">Aqua City</option>'+
'   <option value="457">Awali City</option>'+
'   <option value="458">Chapal Flora</option>'+
'   <option value="459">Emirates City</option>'+
'   <option value="461">Escape Ajman</option>'+
'   <option value="462">Eye Of Ajman</option>'+
'   <option value="463">Freej Balushi</option>'+
'   <option value="464">Green City</option>'+
'   <option value="465">Jurf</option>'+
'   <option value="466">Marmooka City</option>'+
'   <option value="468">Naemiyah</option>'+
'   <option value="469">New Industrial City</option>'+
'   <option value="471">Onyx City</option>'+
'   <option value="472">Park View City</option>'+
'   <option value="473">Rumaila Area</option>'+
'   <option value="1226">Old Industrial Area</option>'+
'   <option value="1227">Liwara</option>'+
'   <option value="1228">Sowan</option>'+
'   <option value="1229">Ajman Freezone</option>'+
'   <option value="1230">Mishrif City</option>'+
'   <option value="1231">Sanaya Industrial Area</option>'+
'   <option value="1232">Rumaila</option>'+
'   <option value="1233">Falcon Tower</option>'+
'   <option value="1234">Hamriya Freezone</option>'+
'   <option value="1235">Al-Zahra</option>'+
'   <option value="1236">Muwaihath</option>'+
'   <option value="1237">GMC</option>'+
'   <option value="1238">New Industrial Area</option>'+
'   <option value="1239">Ajman City Centre</option>'+
'   <option value="1240">Hamriya Town</option>'+
'   <option value="1241">Mishrif Villas</option>'+
'   <option value="1242">Hamdiya -Jarf</option>'+
'   <option value="1243">Ajman University</option>'+
'   <option value="1244">Fewa Ajman</option>'+
'   <option value="1245">Ajman Police Headquarters</option>'+
'</select>';

		break;
		
		case 'FJR':
		
		areaselect += '<select name="AddressArea1" id="area-250" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="550">Al Faseel Area</option>'+
'   <option value="551">Al Jaber Tower</option>'+
'   <option value="552">Al Wurayah Valley</option>'+
'   <option value="553">Fujairah Tower</option>'+
'   <option value="554">Fujairah Trade Centre</option>'+
'   <option value="555">Gurfah Area</option>'+
'   <option value="557">Merashid Area</option>'+
'   <option value="558">Mina Al Fajer</option>'+
'   <option value="559">Rul Dadna</option>'+
'   <option value="560">Sakamkam</option>'+
'   <option value="1290">Khorfakkan</option>'+
'   <option value="1291">Masafi</option>'+
'   <option value="1292">Al-Ghail</option>'+
'   <option value="1293">Manama</option>'+
'   <option value="1294">Taweelah</option>'+
'   <option value="1295">Tawban</option>'+
'   <option value="1296">Dhaid</option>'+
'   <option value="1297">Dibba</option>'+
'   <option value="1298">Fujairah Heritage</option>'+
'   <option value="1299">Fujairah Football Club</option>'+
'   <option value="1300">Fujairah Etisalat</option>'+
'   <option value="1301">Fujairah Municipality</option>'+
'   <option value="1302">Al-Gurfaaa</option>'+
'   <option value="1303">Town Center</option>'+
'   <option value="1304">Al-Ittihad</option>'+
'   <option value="1305">Skamkam</option>'+
'   <option value="1306">Madhab</option>'+
'   <option value="1307">Al-Badiya</option>'+
'   <option value="1308">Friday Market</option>'+
'   <option value="1309">Fujairah Port</option>'+
'   <option value="1310">Al-Baladiya</option>'+
'   <option value="1311">Al-Faseel</option>'+
'</select>';

		break;
		
		case 'SHJ':
		
		areaselect += '<select name="AddressArea1" id="area-250" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="1263">Al-Qasmi Corniche Road</option>'+
'   <option value="1264">Al-Khor Road</option>'+
'   <option value="1265">Dafan Al-Khor</option>'+
'   <option value="1267">Jazirat Al Hamra</option>'+
'   <option value="1268">Al Riffa</option>'+
'   <option value="1269">Al Dhait South</option>'+
'   <option value="1270">Al-Dhaith North</option>'+
'   <option value="1271">Khuzam</option>'+
'   <option value="1272">RAK Airport Area</option>'+
'   <option value="1273">Kharran</option>'+
'   <option value="1274">Nakheel</option>'+
'   <option value="1275">Al-Mamourah</option>'+
'   <option value="1277">Qusaidat</option>'+
'   <option value="1278">Al Brerat</option>'+
'   <option value="1279">Julan</option>'+
'   <option value="1280">Shamal</option>'+
'   <option value="1281">Al-Ghub</option>'+
'   <option value="1282">Al Rams</option>'+
'   <option value="1283">Al-Mareed</option>'+
'   <option value="1644">Mina Al-Arab</option>'+
'   <option value="1645">Adan</option>'+
'   <option value="1646">Marjan Island</option>'+
'   <option value="1647">Digdagga</option>'+
'   <option value="1648">Jazirat Al Hamra-Free Zone 1</option>'+
'   <option value="1649">Jazirat Al Hamra-Free Zone 2</option>'+
'   <option value="1650">Khatt</option>'+
'   <option value="1651">Khor Khwair</option>'+
'   <option value="1652">Old Ras Al Khaimah</option>'+
'   <option value="1659">Al Biyatah</option>'+
'</select>';

		
		break;
		
		case 'RKT':
		
		areaselect +=  '<select name="AddressArea1" id="area-250" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="1263">Al-Qasmi Corniche Road</option>'+
'   <option value="1264">Al-Khor Road</option>'+
'   <option value="1265">Dafan Al-Khor</option>'+
'   <option value="1267">Jazirat Al Hamra</option>'+
'   <option value="1268">Al Riffa</option>'+
'   <option value="1269">Al Dhait South</option>'+
'   <option value="1270">Al-Dhaith North</option>'+
'   <option value="1271">Khuzam</option>'+
'   <option value="1272">RAK Airport Area</option>'+
'   <option value="1273">Kharran</option>'+
'   <option value="1274">Nakheel</option>'+
'   <option value="1275">Al-Mamourah</option>'+
'   <option value="1277">Qusaidat</option>'+
'   <option value="1278">Al Brerat</option>'+
'   <option value="1279">Julan</option>'+
'   <option value="1280">Shamal</option>'+
'   <option value="1281">Al-Ghub</option>'+
'   <option value="1282">Al Rams</option>'+
'   <option value="1283">Al-Mareed</option>'+
'   <option value="1644">Mina Al-Arab</option>'+
'   <option value="1645">Adan</option>'+
'   <option value="1646">Marjan Island</option>'+
'   <option value="1647">Digdagga</option>'+
'   <option value="1648">Jazirat Al Hamra-Free Zone 1</option>'+
'   <option value="1649">Jazirat Al Hamra-Free Zone 2</option>'+
'   <option value="1650">Khatt</option>'+
'   <option value="1651">Khor Khwair</option>'+
'   <option value="1652">Old Ras Al Khaimah</option>'+
'   <option value="1659">Al Biyatah</option>'+
'</select>';


		break;
		
		case 'QIW':
		areaselect += '<select name="AddressArea1" id="AddressArea" class="form-control" required>'+
'   <option value="">- Select -</option>'+
'   <option value="1284">Old Town Area</option>'+
'   <option value="1285">Falaj Al Moalla</option>'+
'   <option value="1286">Industrial Area</option>'+
'   <option value="1287">Al Raafa</option>'+
'   <option value="1288">Al Salamah Area</option>'+
'   <option value="1289">Dream Land</option>'+
'   <option value="1653">Al Aqran</option>'+
'   <option value="1654">Al Butain</option>'+
'   <option value="1655">Al Rashidiya</option>'+
'   <option value="1656">Al Surrah</option>'+
'   <option value="1657">Lubsah</option>'+
'   <option value="1658">Umm Al Thaoub</option>'+
'   <option value="1660">Kaber</option>'+
'   <option value="1661">Al Abraq Area</option>'+
'   <option value="1662">Al Haditha Area</option>'+
'   <option value="1663">Green Belt Area</option>'+
'   <option value="1664">Al Hazzan Area</option>'+
'   <option value="1665">Al Humrah Area</option>'+
'   <option value="1666">Al Hawiyah Area</option>'+
'   <option value="1667">Al Khor Area</option>'+
'   <option value="1668">Al Dar Al Baida Area</option>'+
'   <option value="1669">Al Raas Area</option>'+
'   <option value="1670">Al Riqqah Area</option>'+
'   <option value="1671">Al Ramlah Area</option>'+
'   <option value="1672">Al Raudah Area</option>'+
'   <option value="1673">Al Aahad Area</option>'+
'   <option value="1674">Al Madar Area</option>'+
'   <option value="1675">Al Maidan Area</option>'+
'   <option value="1676">Limaghadar Area</option>'+
'   <option value="1677">Defence Camp Area</option>'+
'   <option value="1678">Mohadhub</option>'+
'</select>';

		break;

		default:
		
		break;
		
		
		}
		
	// Append 
	areaselect += '</div>';
    
   // Append the string 
   $("#append-are-here").html(areaselect);
   
  }
}, '#city');




$(document).on({
	
	change:function() {
		
			var area = $( "#area-250 option:selected" ).text();
			
			$("#area_node").val(area);
		}
	
	}, '#area-250');


$(document).on({
	
	change:function() {
		
			var city = $( "#city option:selected" ).text();
			
			$("#city_node").val(city);
		}
	
	}, '#city');


function RemoveRecentlyViewedItems(el) {
	
		var r = confirm("Confirm, are you sure to delete the item.");
		
		if(r != true) { return false;}
		// Get the attri value 
		var sku = $(el).attr('data-item-sku');
		
		// Url 
		var url = 'http://localhost/ajax/remove-recently-view-product.php';
		
		var data = {sku:sku};
		
		$.ajax({
      type: 'POST',
      url: url,
      data: data,
      dataType: "text",
      success: function(resultData) { 
			
			location.reload();
		 
		}
});

}

function DeleteRecentlyViewProducts() {
	
		var r = confirm("Confirm, are you sure to delete the item.");
		
		if(r != true) { return false;}
		
		var url = 'http://localhost/ajax/delete-recently-view-all-products.php';
		
		var sku = 'Hello';
		
		var data = {sku:sku};
		
		$.ajax({
      type: 'POST',
      url: url,
      data: data,
      dataType: "text",
      success: function(resultData) { 
			
			location.reload();
		 
		}
});

	
	}
