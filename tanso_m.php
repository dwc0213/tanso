<script language='javascript'>

	function pipeSet() {

		var priceArr = new Array();

		priceArr[300] = new Array(0.027,0.047,175,377,372,615);
		priceArr[400] = new Array(0.036,0.06,234,487,496,794);
		priceArr[450] = new Array(0.040,0.067,261,542,554,884);
		priceArr[525] = new Array(0.047,0.100,305,805,647,1314);
		priceArr[600] = new Array(0.054,0.121,349,977,740,1595);
		priceArr[750] = new Array(0.067,0.172,435,1391,925,2270);
		priceArr[800] = new Array(0.072,0.190,464,1532,986,2500);
		priceArr[900] = new Array(0.080,0.225,522,1815,1109,2963);
		priceArr[1000] = new Array(0.089,0.255,580,2058,1233,3358);
		priceArr[1050] = new Array(0.094,0.270,610,2179,1295,3557);
		priceArr[1200] = new Array(0.107,0.281,696,2269,1479,3703);
		priceArr[1350] = new Array(0.121,0.399,784,3228,1665,5269);
		priceArr[1400] = new Array(0.125,0.409,813,3303,1726,5390);
		priceArr[1500] = new Array(0.134,0.427,871,3452,1849,5634);
		priceArr[1600] = new Array(0.143,0.524,928,4235,1971,6912);
		priceArr[1650] = new Array(0.148,0.573,957,4627,2033,7552);
		priceArr[1800] = new Array(0.161,0.595,1045,4805,2219,7842);
		priceArr[2000] = new Array(0.179,0.727,1161,5876,2465,9591);
		priceArr[2100] = new Array(0.188,0.793,1219,6412,2590,10465);
		priceArr[2200] = new Array(0.268,0.869,1736,7022,3688,11462);
		priceArr[2400] = new Array(0.292,1.020,1894,8243,4023,13453);
		priceArr[2600] = new Array(0.316,1.258,2052,10165,4358,16590);
		priceArr[2700] = new Array(0.375,1.377,2435,11126,5171,18159);
		priceArr[3000] = new Array(0.417,1.601,2707,12935,5750,21111);
		priceArr[3300] = new Array(0.458,0,2970,0,6308,0);
		priceArr[3600] = new Array(0.616,0,3993,0,8480,0);
		
		pipe = $('#pipe').find('option:selected').val();
		unitArr = priceArr[pipe];	//선택한 파이프 구경에 해당하는 단가

		price01 = unitArr[0];
		price02 = unitArr[1];
		price03 = unitArr[2];
		price04 = unitArr[3];
		price05 = unitArr[4];
		price06 = unitArr[5];
		
		csp01 = price01 * $('#p_length').val();
		var csp01 = Math.round((csp01) * 100) / 100;
		$('#csp01').val(csp01);

		rcp01 = price02 * $('#p_length').val();
		var rcp01 = Math.round((rcp01) * 100) / 100;
		$('#rcp01').val(rcp01);
		
		csp02 = price03 * $('#p_length').val();
		var csp02 = Math.round((csp02) * 100) / 100;
		$('#csp02').val(csp02);

		rcp02 = price04 * $('#p_length').val();
		var rcp02 = Math.round((rcp02) * 100) / 100;
		$('#rcp02').val(rcp02);

		csp03 = price05 * $('#p_length').val();
		var csp03 = Math.round((csp03) * 100) / 100;
		$('#csp03').val(csp03);

		rcp03 = price06 * $('#p_length').val();
		var rcp03 = Math.round((rcp03) * 100) / 100;
		$('#rcp03').val(rcp03);

		diff01 = (price01 / price02)-1
		diff01 = diff01*100
		var diff01 = parseInt(diff01);
		$('#diff01').val(diff01);

		diff02 = (price03 / price04)-1
		diff02 = diff02*100
		var diff02 = parseInt(diff02);
		$('#diff02').val(diff02);

		diff03 = (price05 / price06)-1
		diff03 = diff03*100
		var diff03 = parseInt(diff03);
		$('#diff03').val(diff03);
		
		

	}

</script>

<input type='hidden' name='type' value="<?=$type?>">
<input type='hidden' name='uid' value="<?=$uid?>">
<input type='hidden' name='SITE_ID' id='SITE_ID' value="<?=$SITE_ID?>">
<input type='hidden' name='GBL_USERID' value="<?=$GBL_USERID?>">
<input type='hidden' name='GBL_MTYPE' value="<?=$GBL_MTYPE?>">
<input type='hidden' name='next_url' value="<?=$_SERVER['PHP_SELF']?>">
<input type='hidden' name='record_start' value="<?=$record_start?>">
<input type='hidden' name='field' value="<?=$field?>">
<input type='hidden' name='word' value="<?=$word?>">
<input type='hidden' name='UserOS' value='<?=$UserOS?>'>
   <style>
        * {margin: 0; padding: 0;}
        ul,ol,li {list-style: none;}
        a {text-decoration: none; color: #333;}
        h2,h3,h4,h5,p,b{margin: 0; word-break: keep-all;}
        p{font-family: 'Pretendard-Regular' , sans-serif;}
        table {border-collapse:collapse;}

        @font-face {font-family: 'Pretendard-Thin'; src: url('//cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Thin.woff') format('woff'); font-weight: 100; font-style: normal;}
        @font-face {font-family: 'Pretendard-Light'; src: url('//cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Light.woff') format('woff'); font-weight: 300; font-style: normal; }
        @font-face {font-family: 'Pretendard-Regular'; src: url('//cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Regular.woff') format('woff'); font-weight: 400; font-style: normal;}
        @font-face { font-family: 'Pretendard-Medium'; src: url('//cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Medium.woff') format('woff'); font-weight: 500; font-style: normal; }
        @font-face {font-family: 'Pretendard-SemiBold'; src: url('//cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-SemiBold.woff') format('woff'); font-weight: 600; font-style: normal; }
        @font-face {font-family: 'Pretendard-Bold'; src: url('//cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-Bold.woff') format('woff'); font-weight: 700; font-style: normal; }
        @font-face {font-family: 'Pretendard-ExtraBold'; src: url('//cdn.jsdelivr.net/gh/Project-Noonnu/noonfonts_2107@1.1/Pretendard-ExtraBold.woff') format('woff'); font-weight: 800; font-style: normal;}
        #wrap12{width: 1200px; }

        #wrap12{font-family: 'Pretendard-Regular', sans-serif ; margin: 30px auto 50px; color: #333; font-weight: 400; line-height: 1.5; word-break: keep-all; box-sizing: border-box;}
        #wrap12 h2{display: block; font-family: 'Pretendard-Bold', sans-serif ; text-align: center; font-size: 34px; color: #222;}
        #wrap12 h2::before{content: ""; display: block; width: 1px; height: 55px; margin: 0 auto 10px; background-color: #222;}
        #wrap12 h2>span{display: block; font-size: 28px; font-weight: 500; text-align: center; color: #222; margin: 0 auto 40px;}

        #wrap12 .content_box1{display: block; width: 100%; box-sizing: border-box; margin-bottom: 30px;}
        #wrap12 .content_box1>h3{padding-left: 15px; border-left: 5px solid #003879;font-size: 24px; margin-bottom: 20px;}
        #wrap12 .content_box1 .pc_only{display: block; width: 100%; box-sizing: border-box;}
        #wrap12 .content_box1 .m_only{display: none;}
        #wrap12 .content_box1 .pc_only .tb1{width: 100%; margin-bottom: 20px; box-sizing: border-box;}
        #wrap12 .content_box1 .pc_only .tb1 th{width: 50%; font-size: 17px; padding: 1%; color: #fff; border-left: 1px solid #fff; background-color: #003879; box-sizing: border-box;}
        #wrap12 .content_box1 .pc_only .tb1 th:first-child{border-left: none;}
        #wrap12 .content_box1 .pc_only .tb1 td{text-align: center; font-size: 17px; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; padding: 1%; box-sizing: border-box;}
        #wrap12 .content_box1 .pc_only .tb1 td:first-child{border-left: 1px solid #ddd;}

        #wrap12 .content_box1 .pc_only .tb2{width: 100%; margin-bottom: 20px; box-sizing: border-box;}
        #wrap12 .content_box1 .pc_only .tb2 th{width: 20%; font-size: 17px; padding: 1%; color: #fff; border-left: 1px solid #fff; background-color: #003879; box-sizing: border-box;}
        #wrap12 .content_box1 .pc_only .tb2 th:first-child{width: 40%; border-left: none;}
        #wrap12 .content_box1 .pc_only .tb2 td{text-align: center; font-size: 17px; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; padding: 1%; box-sizing: border-box;}
        #wrap12 .content_box1 .pc_only .tb2 td:first-child{font-weight: 700; background-color: #f1f1f1; border-left: 1px solid #ddd;}

        #wrap12 .content_box1 p{display: block; font-size: 16px; margin-bottom: 20px; line-height: 1.5; box-sizing: border-box;}
        #wrap12 .content_box1 ul li{font-size: 16px; line-height: 1.5;}
        #wrap12 .content_box1 ul li:nth-child(1){font-size: 18px; font-weight: 700; color: #003879; margin-bottom: 5px;}
        #wrap12 .content_box1>b{display: block; font-size: 17px; width: 100%; padding: 20px 10px; background-color: #f1f1f1; margin-top: 20px; box-sizing: border-box;}
        #wrap12 .content_box1>b>span{display: block; font-size: 16px; font-weight: 500; margin-top: 5px;}

        @media screen and (max-width:768px) {
            #wrap12{width: 100%;}

            
        }

        @media screen and (max-width:650px){
            #wrap12 h2{font-size: 30px; }
            #wrap12 h2>span{font-size: 24px;}

            #wrap12 .content_box1 .m_only{display: block; width: 100%; padding: 0 2%; box-sizing: border-box;}
            #wrap12 .content_box1 .pc_only{display: none;}
            #wrap12 .content_box1 .m_only .tb1{width: 100%; margin-bottom: 20px; box-sizing: border-box;}
            #wrap12 .content_box1 .m_only .tb1 th{width: 50%; font-size: 16px; padding: 1%; color: #fff; border-left: 1px solid #fff; background-color: #003879; box-sizing: border-box;}
            #wrap12 .content_box1 .m_only .tb1 th:first-child{border-left: none;}
            #wrap12 .content_box1 .m_only .tb1 td{text-align: center; font-size: 16px; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; padding: 1%; box-sizing: border-box;}
            #wrap12 .content_box1 .m_only .tb1 td:first-child{border-left: 1px solid #ddd;}

            #wrap12 .content_box1 .m_only .tb2{width: 100%; margin-bottom: 20px; box-sizing: border-box;}
            #wrap12 .content_box1 .m_only .tb2 th{width: 100%; font-size: 16px; padding: 1%; color: #fff; background-color: #003879; box-sizing: border-box;}
            #wrap12 .content_box1 .m_only .tb2 td{width: 50%; text-align: center; font-size: 17px; border-right: 1px solid #ddd; border-bottom: 1px solid #ddd; padding: 1%; box-sizing: border-box;}
            #wrap12 .content_box1 .m_only .tb2 td:first-child{font-weight: 700; background-color: #f1f1f1; border-left: 1px solid #ddd;}

            #wrap12 .content_box1 p{padding: 0 2%;}
            #wrap12 .content_box1 ul{display: block; padding: 0 2%; box-sizing: border-box;}
			input {font-size:16px; font-weight:700;}
			.pipe_select {font-size:16px; font-weight:700;}
			.pipe_select option {font-size:16px; font-weight:bold;}
        }

        @media screen and (max-width:500px){
            #wrap12 h2{font-size: 30px; }
            #wrap12 h2>span{font-size: 24px;}            
            
        }
   </style>

<input type='hidden' name='type' value="<?=$type?>">
<input type='hidden' name='uid' value="<?=$uid?>">
<input type='hidden' name='SITE_ID' id='SITE_ID' value="<?=$SITE_ID?>">
<input type='hidden' name='GBL_USERID' value="<?=$GBL_USERID?>">
<input type='hidden' name='GBL_MTYPE' value="<?=$GBL_MTYPE?>">
<input type='hidden' name='next_url' value="<?=$_SERVER['PHP_SELF']?>">
<input type='hidden' name='record_start' value="<?=$record_start?>">
<input type='hidden' name='field' value="<?=$field?>">
<input type='hidden' name='word' value="<?=$word?>">
<input type='hidden' name='UserOS' value='<?=$UserOS?>'>


    <div id="wrap12">
		<div class="baljagook" style="position:absolute; top: 12px; right: 20px; width:70px;"><img src="footprint.png" style="width: 100%;"></div>
        <h2>탄소발자국 계산기<span>Carbon Footprint Calculator</span></h2>
        <div class="content_box1">
            <h3>파형강관(CSP) vs 콘크리트 흄관(RCP)</h3>
			<p style="font-size:16px; color:#003879; font-weight:700; font-family:'Pretendard-Regular', sans-serif;">※ 적정 값을 기입하시면 자동 계산이 실행됩니다. </p>
            <div class="m_only">
                <table class="tb1">
                    <thead>
                        <tr>
                            <th>파이프 구경 (mm)</th>
                            <th>파이프 길이 (m)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
								<select class="pipe_select" name='pipe' id="pipe" onchange="pipeSet()">
									<option value =''>선택하세요</option>
									<option name='pipe' value ='300'>300 mm</option>
									<option name='pipe' value ='400' >400 mm</option>
									<option name='pipe' value ='450'>450 mm</option>
									<option name='pipe' value ='525'>525 mm</option>
									<option name='pipe' value ='600'>600 mm</option>
									<option name='pipe' value ='750'>750 mm</option>
									<option name='pipe' value ='800'>800 mm</option>
									<option name='pipe' value ='900'>900 mm</option>
									<option name='pipe' value ='1000'>1000 mm</option>
									<option name='pipe' value ='1050'>1050 mm</option>
									<option name='pipe' value ='1200'>1200 mm</option>
									<option name='pipe' value ='1350'>1350 mm</option>
									<option name='pipe' value ='1400'>1400 mm</option>
									<option name='pipe' value ='1500'>1500 mm</option>
									<option name='pipe' value ='1600'>1600 mm</option>
									<option name='pipe' value ='1650'>1650 mm</option>
									<option name='pipe' value ='1800'>1800 mm</option>
									<option name='pipe' value ='2000'>2000 mm</option>
									<option name='pipe' value ='2100'>2100 mm</option>
									<option name='pipe' value ='2200'>2200 mm</option>
									<option name='pipe' value ='2400'>2400 mm</option>
									<option name='pipe' value ='2600'>2600 mm</option>
									<option name='pipe' value ='2700'>2700 mm</option>
									<option name='pipe' value ='3000'>3000 mm</option>
									<option name='pipe' value ='3300'>3300 mm</option>
									<option name='pipe' value ='3600'>3600 mm</option>
								</select>
							</td>
                            <td><input type="text" name="p_length" id="p_length" value="<?=$p_length?>" onkeyup="pipeSet()" style="width:90%;">m</td>
                        </tr>
                    </tbody>
                </table>
                <table class="tb2">
                    <thead>
                        <tr>
                            <th colspan="2">지구온난화 이산화탄소 CO² (톤)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>파형강관(CSP)</td>
                            <td><input type="text" name="csp01" id="csp01" value="<?=$csp01?>" readonly onkeyup='pipeSet()'></td>
                        </tr>
                        <tr>
                            <td style="background-color:#777; color:#fff;">콘크리트 흄관(RCP)</td>
                            <td><input type="text" name="rcp01" id="rcp01" value="<?=$rcp01?>" readonly onkeyup='pipeSet()'></td>
                        </tr>
                        <tr>
                            <td>% 차이</td>
                            <td style="width:100%; display:flex; justify-content:center;"><input style="width: 90%;" type="text" name="diff01" id="diff01" value="<?=$diff01?>" readonly onkeyup='pipeSet()'><span>%</span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="tb2">
                    <thead>
                        <tr>
                            <th colspan="2">담수 사용량 (리터)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>파형강관(CSP)</td>
                            <td><input type="text" name="csp02" id="csp02" value="<?=$csp02?>" readonly onkeyup='pipeSet()'></td>
                        </tr>
                        <tr>
                            <td style="background-color:#777; color:#fff;">콘크리트 흄관(RCP)</td>
                            <td><input type="text" name="rcp02" id="rcp02" value="<?=$rcp02?>" readonly onkeyup='pipeSet()'></td>
                        </tr>
                        <tr>
                            <td>% 차이</td>
                            <td style="width:100%; display:flex; justify-content:center;"><input style="width: 90%;"  type="text" name="diff02" id="diff02" value="<?=$diff02?>" readonly onkeyup='pipeSet()'><span>%</span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="tb2">
                    <thead>
                        <tr>
                            <th colspan="2">1차 에너지 사용량 합계 (Megajoules)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>파형강관(CSP)</td>
                            <td><input type="text" name="csp03" id="csp03" value="<?=$csp03?>" readonly onkeyup='pipeSet()'></td>
                        </tr>
                        <tr>
                            <td style="background-color:#777; color:#fff;">콘크리트 흄관(RCP)</td>
                            <td><input type="text" name="rcp03" id="rcp03" value="<?=$rcp03?>" readonly onkeyup='pipeSet()'></td>
                        </tr>
                        <tr>
                            <td>% 차이</td>
                            <td style="width:100%; display:flex; justify-content:center;"><input style="width: 90%;" type="text" name="diff03" id="diff03" value="<?=$diff03?>" readonly onkeyup='pipeSet()'><span>%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p>References : CSPI Environmental Product Declaration - SCS-EPD-05002, CCPPA EPD - ASTM Certified, AGECO LCA of CSP vs RCP (Nov 2020)</p>

            <ul>
                <li>※ 탄소발자국 계산식 근거</li>
                <li>① 북미 파형강관 환경 성적 표지 인증 :  SCS-EPD-05002 [ 북미 건설용 철강재 분류 규칙 ]  </li>
                <li>② CCPPA EPD [ 캐나다 콘크리트 파이프 및 프리캐스트 협회, 환경 제품 선언 발표 ] - ASTM 공인</li>
                <li>③ AGOCO LCA [ 2020년 11월, 캐나다 AGOCO그룹의 CSP vs RCP 수명주기 분석 ]</li>
            </ul>

            <b>탄소발자국 (Carbon Foot Print) : <span>- 개인 또는 기업, 국가 등의 단체가 활동이나 상품을 생산하고 소비하는 전체 과정을 통해 발생시키는 온실가스, 특히 이산화탄소의 총량을 의미</span></b>
        </div>
    </div>

	<style>
	input {width:100%; border:1px solid #ddd; height: 30px; line-height:  30px;}
	.pipe_select {width: 100%; height: 30px; line-height:  30px; border:1px solid #ddd;}
	</style>