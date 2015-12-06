<?php $page='academic'; include 'inc_header.php' ?>
           <div id="contentBk" class="clearfix">
            <div id="content">
                <div class="topImg clearfix">
                    <img src="img/headers/header_staff.jpg" alt="About Us">
                    <p>Academic <strong>Staff</strong></p>
                </div>
                <div class="wrapper">
					<div align="center">
						<img src="img/data/staff.jpg" alt="President's College - Staff" width="1016" />
					</div>
					<?php
						$staff=array(
							array('principal.jpg', 'Mr. J B C K Jayasekara', 'Principal'),
							array('vp1.jpg', 'Mr. Upali Rathnasiri', 'Vice Principal (Administration)'),
							array('vp2.jpg', 'Mr T.H. Sumanaratne', 'Vice Principal (Academic)'),
							array('vp3.jpg', 'Mrs. E.A.R. Kumarasinghe', 'Vice Principal (Academic)'),
							array('t06.jpg', 'Rev. Gnanawasa Thero', ''),
							array('t46.jpg', 'Rev. W. Gnanawanka Thero', ''),
							array('t01.jpg', 'Mr. R.H. Gunawardhana', ''),
							array('t02.jpg', 'Mr. D.M. Thilakarathna', ''),
							array('t03.jpg', 'Mr. K. Champika', ''),
							array('t04.jpg', 'Mr. D. Ranaweera', ''),
							array('t05.jpg', 'Mr. P. Mambhulage', ''),
							array('t07.jpg', 'Mr. K.N. Kuruppuarachchi', ''),
							array('t08.jpg', 'Mrs. A.T.A. Thilakarathna', ''),
							array('t09.jpg', 'Mrs. S.S. Lakshika', ''),
							array('t11.jpg', 'Mr. W.D. Wickramasinghe', ''),
							array('t13.jpg', 'Mr. W.W.N. Weerasinghe', ''),
							array('t14.jpg', 'Mr. Clancy', ''),
							array('t15.jpg', 'Mrs. S.S.J. Priyadarshani', ''),
							array('t16.jpg', 'Mrs. H.G.I. Jayawardana', ''),
							array('t17.jpg', 'Mrs. S.R. Sarojini', ''),
							array('t18.jpg', 'Mrs. R.M.D. Champika', ''),
							array('t19.jpg', 'Mrs. K.M.S. Jayasinghe', ''),
							array('t20.jpg', 'Mrs. S.D.S. Malkanthi', ''),
							array('t22.jpg', 'Mr. K.L.J. Malcolm', ''),
							array('t23.jpg', 'Mr. W.G.R. Gunarathna', ''),
							array('t24.jpg', 'Mr. E.D.M. Ediriveera', ''),
							array('t25.jpg', 'Mrs. P.K. Hettiarachchi', ''),
							array('t26.jpg', 'Mrs. L.H.N. Lasanthi', ''),
							array('t27.jpg', 'Mrs. J. Samarasinghe', ''),
							array('t28.jpg', 'Mrs. J.C. Narangoda', ''),
							array('t29.jpg', 'Mrs. P.D.A.G.I. Saparamadu', ''),
							array('t30.jpg', 'Mrs. G.M. Chandima', ''),
							array('t31.jpg', 'Mrs. K.A.D.P. Praasangi', ''),
							//array('t32.jpg', 'Teacher', ''),
							array('t33.jpg', 'Mr. S.T. Ajith Nilantha', ''),
							//array('t34.jpg', 'Teacher', ''),
							//array('t35.jpg', 'Teacher', ''),
							array('t36.jpg', 'Mrs. J.N. Renuka', ''),
							array('t37.jpg', 'Mrs. S.A. Sagarika', ''),
							array('t39.jpg', 'Mrs. H.L. Wijesiri', ''),
							array('t40.jpg', 'Mrs. K.W.Kularathna', ''),
							array('t42.jpg', 'Mrs. L.A.K. Gunathilaka', ''),
							array('t43.jpg', 'Mrs. Sonali', ''),
							array('t44.jpg', 'Mr. K.D. Dharmasena', ''),
							array('t45.jpg', 'Mr. G.A.R. Pushpakumara', ''),
							//array('t47.jpg', 'Teacher', ''),
							//array('t48.jpg', 'Teacher', ''),
							array('t49.jpg', 'Mr.W.M.S.Wijesinghe', ''),
							//array('t50.jpg', 'Teacher', ''),
							array('t51.jpg', 'Mrs. Antont', ''),
							array('t52.jpg', 'Mr. G.A.R. Pushpakumara', ''),
							array('t53.jpg', 'Mrs. Mala', ''),
							//array('t54.jpg', 'Teacher', ''),
							array('t55.jpg', 'Mr.C.S.Nuwarapaksha', '')
							
						);
						
						foreach($staff as $teacher){ ?>
							<div class="column c-25 clearfix">
		                        <div class="box">
		                            <div class="boxInfo">
		                                <img class="fwidth" src="img/staff/<?php echo $teacher[0] ?>" alt="<?php echo $teacher[1] ?>">
		                                <h6><?php echo $teacher[1] ?></h6>
										<p><?php echo $teacher[2] ?></p>
		                            </div>
		                        </div>
		                    </div>
						<?php
						echo "\n";
						}
					?>
					<div class="clear"></div>
					
                </div>


            </div>
        </div>
<?php include 'inc_footer.php' ?>