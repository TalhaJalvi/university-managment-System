
<?php
//This session is used to store data in PHPSESSID cookies while a specific user is logged in 
//Starting session before page is loaded so we can get data (email) from loginvalidationdbms.php page above code 
include('includes/topbar.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
 //First getting databse connection
 $conn=mysqli_connect('localhost','root','','universitymanag');
 if ($conn==false) {
   //If connection building is failed to database
  echo "Connection to DBMS failed";
                 }
  else{

  $agreevar=$_POST['agree'];
  if($agreevar=="I Agree")  {
  $awardtypevar=$_POST['awt'];

// $id=$_SESSION['userid'];


    



    // echo  $emailvar;
    // echo $studentnamevar;
    // echo  $studentidvar;
    // echo $icpassportvar;
    // echo  $addressvar;
    // echo $phonenovar;
    // echo  $ingtakevar;
    // echo $examdatevar;
    // echo $awardtypevar;
    // echo $specializationvar;
    // echo  $coursesvar;
    // echo $courseintake;

if($awardtypevar!=""){
    $specializationvar=$_POST['ck'];

  if($specializationvar!=""){ 
  


    //Befor using foreach loop making array
    $arrcourse=array("crs1","crs2","crs3","crs4","crs5","crs6","crs7","crs8","crs9","crs10","crs11","crs12","crs13","crs14","crs15","crs16","crs17","crs18","crs19","crs20","crs21","crs22","crs23","crs24","crs25","crs26","crs27","crs28","crs29","crs30","crs31","crs32","crs33","crs34","crs35","crs36","crs37","crs38","crs39","crs40","crs41","crs42","cr4s3","crs44","crs45","crs46","crs47","crs48","crs49","crs50","crs51","crs52","crs53","crs54","crs55","crs56","crs57");
 $i=1;
 $coursesvar="";
 $courseintake="";

    foreach ($arrcourse as $selected) {
      if(isset($_POST["$selected"])){
         $coursesvar=$coursesvar.$_POST['course'.$i].",";
         $courseintake= $courseintake.$_POST["$selected"].",";
         $i++;
    }
    }

  
    $emailvar=$_POST['email'];
    $studentnamevar=$_POST['sname'];
    $studentidvar=$_POST['sid'];
    $icpassportvar=$_POST['icpsno'];
    $addressvar=$_POST['address'];
    $phonenovar=$_POST['phoneno'];
    $ingtakevar=$_POST['intake'];
    $examdatevar=$_POST['edate'];

echo $emailvar;
 echo $studentnamevar;
echo $studentidvar;
    echo $icpassportvar;
     echo $addressvar;
   echo  $phonenovar;
    echo $ingtakevar;
   echo  $examdatevar;
echo $studentidvar;
echo $coursesvar;
echo $ingtakevar;
echo $courseintake;
$query1="SELECT * FROM `studentcourses` WHERE `sid`='$studentidvar' AND `intake`='$ingtakevar'";
$run=mysqli_query($conn,$query1);
$row=mysqli_num_rows($run);
echo $row;
if($row>=1){
?>
<script type="text/javascript">
  alert("Data for similar intake already exists. Pleae contact your admin");
  location('index.php');
</script>
<?php
}
else{


//Now we want that if student already exists then update his table if same year else if different year then insert new table after deleting it
    //Now inserting data in database
    $query="INSERT INTO `universitymanag`.`studentcourses` (`Email`, `Studentname`, `sid`, `icpassportno`, `address`, `pno`, `intake`, `examdate`, `awardtype`, `specialization`, `courseintak`, `courses`) VALUES ('$emailvar', '$studentnamevar', '$studentidvar', '$icpassportvar', '$addressvar', '$phonenovar', '$ingtakevar', '$examdatevar', ' $awardtypevar', '$specializationvar', ' $courseintake', '$coursesvar')";

    $run=mysqli_query($conn,$query);
    if($run==true){
    ?>
    <script>
    alert("Student Details were updated successfully");
</script>
<?php
}
else{
    ?>
        <script>
    alert("Failed to update student details");
</script>
<?php
}
}
}
else{
   ?>
<script>
    alert("Please Select specialization");
</script>
<?php
 
}
}
 else{
   ?>
<script>
    alert("Please select your award type!!");
</script>
<?php

}
}

else{
      ?>
        <script>
    alert("You have to agree to terms and conditions");
</script>
<?php
}


}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=wOF2     =`     �d  <�                       d��|` �lZ	�<
�� ��}�r �6$�` �| �8�}��#�q� ���N�Mz��VrH�#%�26������`����D���J�z[evG�8�E\�%��+�ؽ4�y5_ziGߟ�S}�W�v��Ա=��3�m�Or�ќ��݅���"�"	^K�&Pn�J��_+"WS���BE�x���wU�̽�����Dp��~��N��T�0u�0.�q\�p�p'�N����LD����Y4��f����)1�1�;�i����e�q�w�ڕl'�����Ӭ�G+)�'���kA����ŵ<p_�`���B��T/'ѩ	�I jy��������QW�LO��b�%�MG(^�Q�p6/�n�:���ʀ��:�c~�bS�wzV6&|��7��g�KJ�HP+�_M���k���o'�/a� 7�m\UY�3�7��w
<����e�C�6��h�[!�l�������w�Q�q�DY	��k��'	�Q��iѬi������Tp��;����g�\�>�Q�'� Y�~-V�q,���`��g*{������v�H
P�WW�+��?������]^�fG��F�U^U��Z� %��0ծuDº�c��� W[6D$��5㫯)ukء��Va]eL��!��^{�`�x�m������v�?������QFA�5C&�11A��
�fd�u�v�   �  �( _��ȫ�I� ����-�G�������`� �H=�ᵕ�V�4���痬M�U->������ܯ�����&��5�#=�"�㯘[�HiZ��ioZ"ӡ�2���Vu�EQ"����R�+t,��j�B!�qH2������x(D�0�"ES饷>R�J��@Z:Y���b���5��:v�Q�w�I��v�%�]q�5�uz�K��^x�����Ͼ�
��%�hJ*�z�r�D�\I7o@^sk3��)���_I���'� :dv�Շ�Nv2�����P-&ё��8��8���N���=��<����#t�/���o���y��� >�3��#9=�^�LO�y���ۢ���?��/݆"]�Q����p�}LV����*:������1���D������) 	�x��.�~�ÿ?������[u�qH	�-��K�#�@
Ґ)k���Oj.a>sG:�]��I}��Α�]E �?H���4db���#t��{R*%�`9dU�]���I�Lx��xS�"�r��B,���\��ĭ�
I]%)H3������r̰��ЉG�B�xQ��x��x�8��o��g9�� �'����1Xj��;Hsh�����b�*5b�z�^˨���^c��P�ML=oj�Y���s��Q̩D��_�yP�\��d�U�]�\��˾�6�X(z��6S9B�]�:�Ϩ��e��	ϪU����ך�^��a���'?���<�5��g��� P���}��ߖ��٠5��J���9�e����d��мH'��O����Q�V���6Ur[�5߇���{�����s���O� ���4�g�T�'�fi����o'�lH7��d�|�톻.:��D�l�6���5�u~;��7z�]u^ԫ8�}��\��|#�9��/�ݐ��		�~��?�k���v��L:������Q��s:��[Њ&��[��~gkwnaW��w���}F{�v��M���~�{���g�g\_��\�au!'V�k��Nrs�?�n0%@���1��7^H�B�D��m���V
�A����28�bg�N�����yZ���v�<�F���ʁ�{ k�&{ػ`̝my��'#^L�g� d+!���R$�D1_4�Q�����B�YB��l!I[�H\�F��2��fR���0�Pk��}k���C����-f{�N��q؉�dN:�r�5�u��ݞ�Bw<�avZ�ԍ����� �a2����q��d����V�fRj��1���Bc,".�0�xdI
����2<�I#�b#�H��	F��!NE8&.q�跍�M'�fl���?V����$#��t�
��8N��#,�n(H"\T��E\O�+i����"f���!�Jm�ʻFWss����[����}���i����#��@mm�( 'c�'TU��#j�y���"#�0������!�	�0�Tڃ )e`M��
7�@V���d�LW��j4Z�2�c	�O��"��k5��6ҁ�� k� ӳS+��"�"�R)4 ,�l=�F;�<�3�|�m������nGj���s�2Z�z����>��!J= �����g@����>o-��&�!-M:�%��?	b�{�?�p�	��� �ɠ���;���-�?zr�@�X. ���h�v'\��[,:}�b*Nĝ�w����h;ڑv���:�V���F'gg����  DhK-��fN��w#hh+��mh���Q�����z�Y��M�>XvЍ����ÿ��E;9y��v��I�xs�yq��L6�?��=�Uh�͐UDKS����M�p�v���D�\w�M��6�w�u�}<d��;}ĭ�z��>���'B ���6p !��#g��A�l��79d�vU:�8����\����<74n�e���&3{��<���2�wZ���s_}�����?�6�>��v�;֝��ş{�^��,�y`V�/�KG`N���_�w�s�{��&姼�S�RI����;�� N�j���,B�=zV률� mUd�=����������� 1����e��^7f��r3�2��!��u O'����f�N�r�a9V�-��C��( �����V�^u�1�Nyj��<��c��a��D͠�'3��C��p?��=,�!ܮ��]tݖBk��bc>C����m�ݽJ�wƽ��X���'�`��c���̀7]z���"�������	����L�Z��E��NN����t��t[9^%�9��Ƶ`�p�Y��;3��@0��M�uqb�r�}����L�n� X;��e����t��6U�>�E1�ߋQ�1<�uz��9�������&	ѷyB�{����tN{cRާ��z��4��'����[�H!����|?���!�^[}A}`@�We�Ņ���3���2A��	�L$�(�$$�b���h�
Jc�<�Ƅ-(���5ӂa��Era�E�R6�� �4+iԔ��ᗧ�<���/36s�Š1�> �Xy����+�����v���3h���u8�N��vN"ʍ~�)���qfq���&{��Ս��w�(Tq0ɍѴ���
���*�d��6�o��ط��.u�Oz��wF��jt�a�bM�>&1�k�ݭV�C������Fhg�bK<y��6��x�D�e�g����ڨƦ��r�~��V&ړ��lW�S7ՙtb�8����+�@�@��dMh�]�~(U��d�C��H
�ă�N"�p" c��Wg����I�W`8�2�T>���-�x�����Y6�Z�,�A��4 �6�
t
�����cW֤���S*4�����`Ý�g�v�[r��pdO�g�:�3Ӎ�Y&�B���`�c.)�š��'�'�٦T`̓���6땚�[T��u�L{���L����� ���y�b`�3G�=�	�-�
zU˒����uU����Z��f�4KVnrߤ������'��mև�.r��̕I�������DE,��)�����(��0� ޣ��2.=_b{��{����2Mg��S]/��2U�-!1�]Z�Q�~��!�=)�����ܚŜ�q�<8^QSyҼ-֊��S��z8�����>��u`�L=\��fݤӻ�����񷒋�c��l�^�������K=�X�GZ�*_ո�4X������i��dL��8T��D�Vr�5�X�j^�0��&�t��~�xq�S������(gί.EUO�
��]���£���Yx�'�	f�m��9vp
h8�e���*����4�'�j�?e�V���%g� [������>q$��hi��W���-`�O��6IT�=-�i�x�����zz5Yg\$��^� \�F����.���{3}�pһR`c�������íK�Ȉ(9�sy�J�W�ΰH=�����7��9���J��cM&�!�+]��/�	%L�P�7bHd�l����T��P� S��+�<��B���&�l$��U���~�n��2"�� ��9Z��x����'�xO�.��vN/}Y�F�L(�1�u�I^��:�ily��|8+��58�O�Lr5*����	�F�}�"H���+�
�e�Hx(��O�5��T�q��N�:����NH�d��8p1�iKf�����50J���s��T:ze��0�78��s�q�YJ�>z���X�"����}y�TM�8��&O�į�P8M�oH�����\�XP� Z߉� Fm��9�%-P��J5K�(�
5�T*c��_C���E�zq��1��/P�h�ӿ�tc�*&HY�!*�5%3mH�r��t�xj�]����8���g�v`��f#�B9����r!�>xUY�Y
��QP�<����N�N
�ڸ�U�~A�茏�
8O�f��P�s��E�RN�Wx��O�ˎH�^tv%S�y��HB������+c��7��U|� ���;P��T�W3]&YGc^�R.*[�Yȗi	:ךY�՛U�A
~_7[�b�����`q� � ��/�Mi鏏��z1����D����=a%�o�%�ݳ� $6Uf^Cʓ��)6�$ǘوȞ|���o��h�+�.��#� ?�.��u��ѼIn>FK�#���K��w\�?̤��,[NY�0��\˱f���H���݌�u��g��PB�����h<����/�(G�"�W�	�w��F${,|p��IcͶM���a�Jc�23����n�XZ悘�V3�luUy���#��2�¶$PG�TPԍ�.�"(�@Ref�W�?{G�l<3�f�AgK���f�"��QaK��"�Ȯ�L���{��d�C��=��/�}�����Z�Og�7���d���xw�3�нU�� m����j�[g����:j�E��0˥�ިp:�����Q�Y�8�+YT��`��9 �u~�i�uY 3����dzJ
��a�b%��z�����{�/���IQ,�����Υ�\N��Ny�}�\�ob�Â�	���Ι'��D��LRr�b��{V7ëW��W��>�/G��W��DW���(�*��Q�X?�b�U9��~6�G��۱������g����H��1���F��p�(�ø]��M�"z���	��ƍ��G�w�a�(2�	co�b�hgV\o+�b\oe��n���A|��u��-C3�A��ֲ��%�˨�b��i�Z��s� ���8m�:0�i]?����#����Wb��7�ڟ��O�*����ӥ.0�_��A��z5�6Y���^�̀~'���2̝�]��
���'���F-uS����Mx�"_w��8��8uŁR��i{�W��v�j<�˴=G��bb-�P(�}N�7�|ݴr�w�q��4O����&Ё�Y�)s��ԕ4q�'^��f3֤g\=�#�F�zB�U��D"È���`$���i��0Oe��- lBX�G�/_�$u�/��/�`}�J[&}?����_���.ӯ�y�s<z���cT�5$G�"���Vl�[
,�B�tl���rP���,EP��vh�4\V������n9��d��On���?�7N�[��q4�<�G��n�r�v5~)�+iQ��qѧ�Ĺx<��ݞ��
tqo3�6d�1u���m��.V��h�9�c���<L^^'B�`�8����[��9������]�6]���E�D.sN�a��;���K{�.�����vPcw΋~�����+]t����EG>:Ud;�)����I@�Ǫ~>�.��ڱ}��|�>
�-DFB\5}��f@ϟ�=�M�]�Ud��#���q��iDZ8��Y�Y�#��,H_��+oxw�S?��+,>*N���~=`$O�=#��E(t4H���O��X�U��g�p'QG!�0���Y�ރ���T
=�ƴ��> Hxro��:��m��T�[;�P8���W;�Ƿg�0��E���9�����1Q�s�}�]�%Z(����S�B�w��e�cט)�E��F	��6�;��z�j�zh<��d�0���N���;�>�1�F���x��Cş~�e�jE�^ɰа�K�/�>����������}(����]Yú_�A ��J(�^
�n����m�z"���ُ|�Fw�>��X��/&��������H �W�:�h��i&�;�;{���������m�jQlr(k<&����ޞ+�r�Z�����%���*��<2}������{�%_�=��|,�\t1�F�!� ��#l��R�0$��	Y"�WH|Zi&�3!��K�N86�;(�h���|֔7�;���� d*;��78;��;� C�Q=�Gy���u]����*I�Z�xh��է�kEZ�����t�E�&�[������4�'�?E���*Aa�,��YQ~�1���$�@�G���R�!�����M\��T싐�j2a��{Rg��?9�p�		\�g�*�ap	��O
^�g��o}���M5����+~���g[��ˏN�
�� /�D&62�"�ߍo������n2e��~Zg��?%�Լ���ㄧ�Y�������O�	���Uq�i&(���¯h4�)���+O���� �����d��Q�c ���_U9w2)� w2% gf�|�J���<+����1��E152&(ۑ��#47�5_�װ3�o�� �����|�s_e���5i�QVΖm�K���e�=�x�K\�ľ >���W���>r��|�%*ԋo}�/���������f��������x|;/�W����L h\��hB��B�|(
�8D��\k� �>���������It�L�饆���*O�S}��A������+"�4�9�m׈kՏ���X���Da�y>����1U턕���t��{�5�o"Dy�ˬ�������ʐ��7�+pbY�pa��*��h��_^>[�m�������8�b~�g�=��v͘�%����J#���e���%��8�B�ތ����?�!��n!u|<}��A.~����}n�������α��M����+�^<���"A�!:ub���;�o�\�"�?�t�3��=��������gguRBy���E��\�~E�Z�/��jv�~̕����\��5΁ZV������d��F���CНn\��9������pP�����Uo���j*̈́��[w	(�������ql�J)��p�Ք�kČ�*KH3Z���%Ay��Jn[��ܳ�*��u��mP4M'�}\'Q���]��+#���\��yu�ec׍��:zj�O�P�|K��{F�wk5V�������`�TA�sbUT����m�8s��6_����q{R��^�g���w�\ v�����΄@.�l+-_�d��+�wp����s{1�:"T{.#�y�?��lT󼎅�����LU�~�31�P~ұ��u����k	U��?�d%����������fB�!m̑�}�����>��´�|u���mo�&��.��}/�/{d`���4v6���������:<ϊB�ΊBifة�D��1Tf u0UF������OU��]�H��P;M��z��H	x����J1?_&���U�D]���@� ߳~d��ڎ��=b���MX�h�o���ep���+75�^l팹���n��H����8���G�,�;�<�;r@kp]�ٲ߲��Íꡏz(�4��&ư��w��Ⱥ4pXm�e2M!fְ��Z�aJ$�㬛T/�n�hN���Ζ����n���N7��R�&[pԌ*pY���ő�-����}������߯�Q���k����7$mܬOLI�/����]��TTjSP\6�PQT��)��kؘw���G1a�Q�k��!�t��耵��� >0���	����!�д'�ScZ��1s���/�,���CY5�?�9�k�_r������&|>fI�paz�Ց�}'z���^��x�\�<aPx0B	�m�n������ �,:u"�m������)+z߄Co�l�5_ T�6�M=
�y����V^Gu�9�Ҳ���Hz�+�������)#���&�].c[.-���(�Z+۹1AB����6nM;[-��[�N���j|l�	Qiq�A�b�{A�#`Vښ=�>�)ٌڢLcw	�[�E�rG���i��d�Zc��F�'lrߊ�m��&OV�$j�����/�s *�j�lapt}f�-튮���Ѡ7�>r}D��Qw��ְ���Ȉ�����&qN]�����
凲�Re�c h�z�UOP����._W��XMD�̩�&AԖ�*���Ք]ӞgCH(�� P.H':N^��Ibǫ3!��'�'&G��b��dJmI_NؾL����1 )���1+�Р1@���K���,��dK�z]Pw�K�0�\�<��w��3���s{���"�u�R%��}�N��-�dK�dj���P��qܛf�f�Z5N.�7L/���y�b����wc���\�t���f"+��,�aƮ$�%�L�"��xֵ/w��ݙ�۔�	h[��ee������އ�}@3�UR�U��>	�9>�U�)#k����):	*�*Zs#�*������E/�����*�%��w7���
�>����^̃�U/w��[^ߔ�[� �LIrN��
��L���c���M��s��/ t�,�{�w�7�-�ϋ���y���籓�=��JG9M[�[>��ԁM�d%����dlgf|I˲1���&_�7��1A�y�8���_��`��������P�G�`V6PU�H%��ˍ�D�yУ���d~�X�W��3�m8� �M="�_��C�� ȃ(���CWs��}-��Rd؟/��j�cR�N��ϬO�i&��~��@t$�c(��1��B���@�Q|۪�a��H/�D�D�Xt�%ݵ�����Z�E�4
NY���p�̺4���>cQ����n)ƀ*�}�J�wv�\ �?[$���"�ig��\^� ���KqRd��";�U�#����Cd3�������cG���z����1G�;�����B�G���]xG�|dFM{�vGݵZ��������r���^��q�&�EwN�(���߶�9@$l&�$o��|�WR�bQV�����/�'�jQE����?O���&�7�8�EP�r	bJ��wD4��5���U�a�f���M�	���fw�f�Nq���p��e��2���� �����Q*W����b���Cݜ�2T��L���n�ٙ��Cx���Bĺ�[�R�x�ܼ��e�.��	�I���礅�榀���Y���f�,�w��7EB�7L�kn��©[zFb����
_�L�������q�"?�gD�eU�Ѳ�ܒ�4�F�8�|3����	erC��z�\�ۮ�k��"Z�L=��\�"�+�S���47,��c���e� ���>�w�0x(>S����a�T}�}d�u��8���Q{�(�xJ�i!r�˼e�.� �K��1�/ ��؞���7���M��Qe����{aY8��w���]�/_����ϻd�R�V�7悒n���&븹9���خ;otm���� ��-����"�4_R�MhV��W��7�JGj;�J�:��ls�XW��Y��D�R����0;����z�@����r��T�x� b.^3xl_�PSK����fM��R�/=4���,9����s���s�W����M3FG�X8u�����/�{��q���#O��9({�������ELkȺ�u�aT�W���g���榨ʨ��%�r�-qgĊlHv����������\u��[ۦӄ��k'��z5�犭��oD6��l|�V���E���TK
�Bj��>��}}��z�v90V���8/J���<�6�sX��;� ��Cy��?�t��.� ˗�Zb���K��=l꽝K]/θc�Ŀ���GL�o�R�pcR��`2����@�UNҿe�dU'��G������2���#�v���x���bv޳�c@Tc3^o3�V{�����Y��n���~��4~�X��U��� �,ա�F�$1jLϫ������61kj%�;�!�� �pfk5�g6��K]^�b�3o���Ȕr>扎����I�7��7�9�W��l\��I*J�3�@��#�"���0�1�%�`�Zw!��1Hќ���4< M��|I��9X0==�i�� R�Z�▱�v��P�-lcrщK7�K�NL�Ր6`2D]�Q�ޞ�84�>   �$�3�?=���}2^T��;v�@���ʿ�U����@�sv1 �s�L�9x�w��@���8SՕH�X<ȣ���'��H��d$DA�{��\��Dum�F��.�>v���W\��^z|�x���ɫJ%�?�O���̯�LU������?�d�ᯢ֥�5�Sۿ�JS'�)k$M�}��U�'U?�ǧf�j���-@a"k��t���$�U?�� �B��n�������?����r;��<A�cB�؃$/ ¬e��dx-�������RkB4	�<<�_�6O��$>�ƌ�����ź���o��@�@�^�Ò���{$컢��n�m�X�zDf���Ԣ�n����?5||���Z�ԲK!)�|<Ο׻��Jp))�&}$�C)`���S��a���G�`dRUh�e��TT�Nm ��L8yt��Cw0e�}�� �f����l��op���n?sO:	���>��}���yz���L�`�qf�͌�o��v����o	��|�>����!�E@L�<����Q��e�������Yy�<����I�-�R|3�Q�,帎��ͭ|���"�e ��&�˼��z���B�='��l�6/yS��m
��`,���P���$�Zh�;
�#��M�[µ���afm�f���	��:�	�  ��Gʃ�QPR��*]4"��s��9����_+
nX�5H���A��Iڪg>��ɉ4��V�B7��%�(�]`�$'�)NP����`��)DDVWeR��͒׃��W�q]��#/_����Б @T���2����j�p��Ƹ��� s�<���9��DSn����LF��Wzx��ˡ�ȧou��u�JX�%�G� �@v��J�1&��0&�����	�H�Y��`�F��f&������O~i'4��%�Cl��ɼ�~S�:��J���<��	*R��B���ٓ@�8�>�K^5�ӎ:7�z���a&P{����_��ǚ��#,r���z7�rr,�t�B�C~�MX�k~��gߧκ����v������߸:��T�#h'�TmO���]p�e�x�H>p(e��vݘ��nz(�!��D �qպH���`�ǖ<�h�lje�2��[����4��X��`SQ��E����#,�r��{����x���1���Im�t���=�����} ��N���_m6�گBV����s�p�.�HDJB<Рf$Q8�݂�Z�a����C 	._�X��L�\�)�8���l�d�Yx-:�Hyg##	�%�.�M)�6��	f��X�ȹ��'y\!��ER���~!���$ [��|���� Sa��yŐ5��=��,g�4�/���\���w�#(�b��qKa�8uܮ])�]�-9��A������td����aƞ�����9�<�EW2%�-]kH����Jc�5p��G��_�Br;Epb
w1>S1����R9�MJ�d�ʜb.\MG�ˣ�' j��uE��_�.��z���  �ΌFzN�&R����_:,sRgn*�����/Z�������lwͯ�X��s0�Gv�|3V��\�t��j�{��^HHM��i[�8��b�� pX��y��2�k�\-	%�s�ιA�LE��㬷�MŃ��[}���9�O\-���?�U�?�`WW=JZW�d����Hf�o���;}�ډymҰ�3�
KbsN��_Љ��u�!;|�9���������V����Y.Lp�g{K�@�h����vI$[hJ�Z�E��Z��R�BH���?\��!5�n 5`�h��u�Υ���ؚ� �t��㥀R.� Ie"�崪�X�oÍ�|@&ּ��(�s9��uΌ
-�Ω^��(n�I�'4g����ke�C��S`��)ʌ.�G�ҽ�� N���tVX��������S�[����������D�����B��џ�7ڱ�I^ҵ�)��_���~�bk�־?E��������X�Z�ꑖ�?_�v��u��C�_?�Vy^?v�ٺ.�{�<,��B�.�prQ���Pv0M��f��z�E՜N�G;W��}�"�A܁�Թ�3?���.~\tE�ٹ�Ap�v�רm���m(��An3p�;C2kt[5[M�dIq�������ʪv�y��hщNf�QV���xnA���M�NE��,��b 5"�4!�!��x��}tZ*$�m�깤ba�-���4�]��R�(���0��03�̉�94G��薫t�����Β��I�Px��)����b��Y��#����$��';vE�y��I��⁀��)�Kۋoޝ�`�ݱ���0q�rz1]9ơ㧧�U5��0~����z#�קr�8��T�O�"k����l}y;բ��x��$^��$�p��)2����||��=Ф��z���+��-	M/�̖�l_,'�A���;��,�4��Oa�A�t�lR�2�A�A�C{�q�,/L��Kɿ-�D�jt����
�+���P���wh s����#rv������{$l�n��V��?O_��Z>����=�u��9=0�Ԣ�Nء���͝��t��v ]����N,�E!������ɜQ�F�f-ԧ!Y �=�8V�Kꐅn�GZY�t�F�(�S����F��r�0�n	���qf,�U��!���v�ɝ�����}���B�{�$�_�Ύ��#��fw�u�A}a+o�]�9ɇ�W�ș�,_5�H"�v�G�.� ]+��딀{�C��K���&�+��x��.��סU���b:��B�H�T�ptuG�nN�7r��;����ߣ��ˀ�t�����R{F��M����;�.���s�鏄d�̖�/��N�m�l��gx&2�J{�Ī��C��Mq�����Ь�;\��.��k���N(ʁ7Rv���s���f��� �_-�'��7A��Ӊ(s�K���ȕ�zQ?jwͿ˯�W6_]�/�+��"����!gs�T�&+����//�mKҷ���57Q�U����(��O��z��Zߕ=]�1۲��}4�BFQ!oz*��-<��a���Y׳��cNj�.�n��^�6%�8��!D2�"��ms�'G�œE�o\�c�k����4(��qcO��==�����w�>ҏ��dx17�~��~%�CG��+7ܥA��//��u�9bNVqYe8��� ����䟕�X����Ek2n�'��x+#l��A?��<��	m,gu�g�GN�����=�1 >�	�vc 1lռ�͙�Jh����-ǌ+#�9O ���'��/��R�~E0Њ�l~�@�
J���)+�y��Z[���.��q��:{IM\^�c�Q����ZւMmz�:�(Y�lڇR��d���%�FAi�#�IL���-�O�X������H�z;G��\a����uI���;D�Ѥ�_�ўq���h���l|��!��e�7����`��/�v���8N����w�I�r��`,���gh��Yt�`��,�o-ch�g?¦����)W���/p� �>9S��WU9q�cҎ4����`���g�q��ݍ=]x�1/��h�\C�PW�E3����5gB��a@�d��v^ņ�=�0o�0.c(lm�\C%��_l��oV暏���o��5�vrs�ֵ�u���3���=1V����D�7R���9%�Q�fK����J^u,���X~�&��N8�8�g��YY��7�6���5�y
ʘ3��p ����	xR���tB>��>(��o\t��]H�_"�4��Z�P{�H�r�f6s�$��Q����}a�VP2&ݔ((���E�')�&}h�=��Z�Rdd`��BhV�� ���X�|����IE����^��?��s��&ޱW� �W�Z�;�Z�$C����rL�/����O�ou	�*(x�G|���*/�H|���Z����J���qs�ԟ�� ��)>E�C�r�su����y2�%Ο�[]��4��]���0$�֣�;��S7�z�N���)�B3!���� ��m^�s��Ȭ���`x8�Z�%OR2��7�9X���#3��l��������Z9*J<�lY�xk�s@�v�N���Y#��r���?v{/EQ&2b���ȹhd�}�{\���@��߹�[  p�� \�7���۶U� @��q�7���Kf�N���t���6���V9lk5�ZN7�Ȟ4�#�O\52���=�*�_x��y�F�����c*X��1 :�"�C�o�aG]��k���SU`=Wo�Y����iF3�TV�.������SM�:}�a��J�Ae�i]����������dZ����i��K��N�#Ny���:�|5�l��«�jf��B�Ih��O�"j�A18.u����c��W��r+yfra$�D;y>C)��;�ʑ���S8㣚gl��^SbhxS�r붢IS��Ɉy��<1l���٦|�.�h���.ٙ~ƕ�� $�b��`r>��m%+���5����=j�R-��R�,�R	���7�S�i9�W�[�Tm}�kXX�n��J+n�hј�U�(@��O��ȿ�{�d���||jt�.C� �8aZB4E����Y$	�{(�)blQ�L+�)'\?c,���mp�!�,$��P���7q	@�x9 ��u���L���������wW�֥���K�����ƞ}f��H�ڪ1�N���X"��0�z��1/A����3���(�M� Å�*D@�`(�T#6�Vcb�g�3ITS�MV��_T,�	�T�V�"��т
�����+���R�|��X׉�@������iU�ͨ�i���E�V�uJHW����T�Ύ����.��W-Z���?��u�X�dj	((	
T�M�N�t)h�����aE �`Jl�|/����!�m��D����J1pO�$�?ۛV
Ӊ\rΓ]�]P�J�р�r��R����i�v�ܠ�m$m<4[����X8]`�̄*�me���6�']�W�+l�U���!��@���Q����d�G��������O�0�	 �?�_T�Yb�`��P4P�T���i��!&�o�z�����E��}�
pB��
�  �\�=�      `J�`J�B�	�b"��   s    O^partitionKey=%28https%2Cfilehippo.com%29,a,:https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBBc4.woff2 necko:classified 1 strongly-framed 1 security-info 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 request-method GET response-head HTTP/2 200 OK
accept-ranges: bytes
content-type: font/woff2
access-control-allow-origin: *
timing-allow-origin: *
content-length: 15712
date: Thu, 04 Mar 2021 22:19:51 GMT
expires: Fri, 04 Mar 2022 22:19:51 GMT
last-modified: Wed, 24 Jul 2019 01:19:17 GMT
x-content-type-options: nosniff
server: sffe
x-xss-protection: 0
cache-control: public, max-age=31536000
age: 570297
alt-svc: h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
X-Firefox-Spdy: h2
 original-response-headers accept-ranges: bytes
content-type: font/woff2
access-control-allow-origin: *
timing-allow-origin: *
content-length: 15712
date: Thu, 04 Mar 2021 22:19:51 GMT
expires: Fri, 04 Mar 2022 22:19:51 GMT
last-modified: Wed, 24 Jul 2019 01:19:17 GMT
x-content-type-options: nosniff
server: sffe
x-xss-protection: 0
cache-control: public, max-age=31536000
age: 570297
alt-svc: h3-29=":443"; ma=2592000,h3-T051=":443"; ma=2592000,h3-Q050=":443"; ma=2592000,h3-Q046=":443"; ma=2592000,h3-Q043=":443"; ma=2592000,quic=":443"; ma=2592000; v="46,43"
X-Firefox-Spdy: h2
 ctid 1 net-response-time-onstart 770 net-response-time-onstop 801   =`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            RCHITECTURE GROUP A : Intake Sept 2018, Sept 2019 (Direct Entry Year 2)</td>
            <input type="hidden" name="course39" value="TCS3213 COMPUTER ARCHITECTURE GROUP A : Intake Sept 2018, Sept 2019 (Direct Entry Year 2)" required="true">
            <td><input type="radio" name="crs39" value="intake"></td>
            <td><input type="radio" name="crs39" value="retake"></td>
          </tr>
                    <tr>
            <td>TCS3213 COMPUTER ARCHITECTURE GROUP B : Intake May 2018, July 2018, May 2019 (Direct Entry Year 2), July 2019 (Direct Entry Year 2)</td>
            <input type="hidden" name="course40" value="TCS3213 COMPUTER ARCHITECTURE GROUP B : Intake May 2018, July 2018, May 2019 (Direct Entry Year 2), July 2019 (Direct Entry Year 2)" required="true">
            <td><input type="radio" name="crs40" value="intake"></td>
            <td><input type="radio" name="crs40" value="retake"></td>
          </tr>
                    <tr>
            <td>TCS3283 HUMAN COMPUTER INTERACTION GROUP A : Intake Sept 2018, Sept 2019 (Direct Entry Year 2)</td>
            <input type="hidden" name="course41" value="TCS3283 HUMAN COMPUTER INTERACTION GROUP A : Intake Sept 2018, Sept 2019 (Direct Entry Year 2)" required="true">
            <td><input type="radio" name="crs41" value="intake"></td>
            <td><input type="radio" name="crs41" value="retake"></td>
          </tr>
                    <tr>
            <td>TCS3283 HUMAN COMPUTER INTERACTION GROUP B : Intake May 2018, July 2018, May 2019 (Direct Entry Year 2), July 2019 (Direct Entry Year 2)</td>
            <input type="hidden" name="course42" value="TCS3283 HUMAN COMPUTER INTERACTION GROUP B : Intake May 2018, July 2018, May 2019 (Direct Entry Year 2), July 2019 (Direct Entry Year 2)" required="true">
            <td><input type="radio" name="crs42" value="intake"></td>
            <td><input type="radio" name="crs42" value="retake"></td>
          </tr>
                    <tr>
            <td>TCS4403(A) FINAL YEAR PROJECT 1</td>
            <input type="hidden" name="course43" value="TCS4403(A) FINAL YEAR PROJECT 1" required="true">
            <td><input type="radio" name="crs43" value="intake"></td>
            <td><input type="radio" name="crs43" value="retake"></td>
          </tr>
                    <tr>
            <td>TCS4403(B) FINAL YEAR PROJECT 2</td>
            <input type="hidden" name="course44" value="TCS4403(B) FINAL YEAR PROJECT 2" required="true">
            <td><input type="radio" name="crs44" value="intake"></td>
            <td><input type="radio" name="crs44" value="retake"></td>
          </tr>
                    <tr>
            <td>TCS4434 NETWORKS AND SYSTEMS ADMINISTRATION</td>
            <input type="hidden" name="course45" value="TCS3133 INTRODUCTION TO IOT" required="true">
            <td><input type="radio" name="crs45" value="intake"></td>
            <td><input type="radio" name="crs45" value="retake"></td>
          </tr>
                    <tr>
            <td>TCS4444 ICT SERVICES MANAGEMENT</td>
            <input type="hidden" name="course46" value="TCS4434 NETWORKS AND SYSTEMS ADMINISTRATION" required="true">
            <td><input type="radio" name="crs46" value="intake"></td>
            <td><input type="radio" name="crs46" value="retake"></td>
          </tr>
                    <tr>
            <td>LEA4173 ACADEMIC RESEARCH</td>
            <input type="hidden" name="course47" value="LEA4173 ACADEMIC RESEARCH<" required="true">
            <td><input type="radio" name="crs47" value="intake"></td>
            <td><input type="radio" name="crs47" value="retake"></td>
          </tr>
                    <tr>
            <td>MPU3142 B. M KOMUNIKASI 2</td>
            <input type="hidden" name="course48" value="MPU3142 B. M KOMUNIKASI 2" required="true">
            <td><input type="radio" name="crs48" value="intake"></td>
            <td><input type="radio" name="crs48" value="retake"></td>
          </tr>
                    <tr>
            <td>MPU3122 TITAS</td>
            <input type="hidden" name="course49" value="MPU3122 TITAS" required="true">
            <td><input type="radio" name="crs49" value="intake"></td>
            <td><input type="radio" name="crs49" value="retake"></td>
          </tr>
                    <tr>
            <td>BUS5073 BUSINESS ETHICS</td>
            <input type="hidden" name="course50" value="BUS5073 BUSINESS ETHICS" required="true">
            <td><input type="radio" name="crs50" value="intake"></td>
            <td><input type="radio" name="crs50" value="retake"></td>
          </tr>
                    <tr>
            <td>ENL5183 ENTREPRENEURSHIP</td>
            <input type="hidden" name="course51" value="ENL5183 ENTREPRENEURSHIP" required="true">
            <td><input type="radio" name="crs51" value="intake"></td>
            <td><input type="radio" name="crs51" value="retake"></td>
          </tr>
                             <tr>
            <td>MGT4193 ENVIRONMENTAL MANAGEMENT AND TECHNOLOGY</td>
            <input type="hidden" name="course52" value="MGT4193 ENVIRONMENTAL MANAGEMENT AND TECHNOLOGY" required="true">
            <td><input type="radio" name="crs52" value="intake"></td>
            <td><input type="radio" name="crs52" value="retake"></td>
          </tr>
                             <tr>
            <td>MPU3132 HUBUNGAN ETNIK</td>
            <input type="hidden" name="course53" value="MPU3132 HUBUNGAN ETNIK" required="true">
            <td><input type="radio" name="crs53" value="intake"></td>
            <td><input type="radio" name="crs53" value="retake"></td>
          </tr>
                             <tr>
            <td>MPU3172 PENGAJIAN MALAYSIA 3</td>
            <input type="hidden" name="course54" value="MPU3172 PENGAJIAN MALAYSIA 3" required="true">
            <td><input type="radio" name="crs54" value="intake"></td>
            <td><input type="radio" name="crs54" value="retake"></td>
          </tr>
                             <tr>
            <td>MPU3442 PENGURUSAN KO-KURIKULUM</td>
            <input type="hidden" name="course55" value="MPU3442 PENGURUSAN KO-KURIKULUM" required="true">
            <td><input type="radio" name="crs55" value="intake"></td>
            <td><input type="radio" name="crs55" value="retake"></td>
          </tr>
                             <tr>
            <td>MPU3332 PERSONAL HEALTH MANAGEMENT</td>
            <input type="hidden" name="course56" value="MPU3332 PERSONAL HEALTH MANAGEMENT" required="true">
            <td><input type="radio" name="crs56" value="intake"></td>
            <td><input type="radio" name="crs56" value="retake"></td>
          </tr>
                             <tr>
            <td>TCS4486 INDUSTRIAL ATTACHMENT</td>
            <input type="hidden" name="course57" value="TCS4486 INDUSTRIAL ATTACHMENT" required="true">
            <td><input type="radio" name="crs57" value="intake"></td>
            <td><input type="radio" name="crs57" value="retake"></td>
          </tr>
          </table>

         <p>I, by submitting this Online Course Registration Form, it shall be deemed here that I have accepted all terms and conditions. I hereby declare that I will observe at all times the examinations rule and regulations currently in force. I also undertake to pay my current semester tuition fees in full for the duration of the Programme and it is on this condition that I am enrolling for the above courses/examinations at your University. I acknowledge that my results for the courses enrolled will not be processed until I have cleared my outstanding fees. *</p>

         <input type="radio" name="agree" value="I Agree">
          <font size="1">I Agree</font>
  
         <input type="radio" name="agree" value="Disagree">
          <font size="1">I Disagree</font>

       <BR>
       <BR>
       <BR>
      <input type="submit" name="submit" value="submit" style="background-color: #7349BD;color: white;">
     </form>

    </div>
</div>



</div>
<!-- Main div ends above -->
        

                    </div>
                  </div>
                  
                  </div>  



        </div>
      </div>
    </body>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                  "closeButton": true,
                  "debug": false,
                  "newestOnTop": false,
                  "progressBar": false,
                  "positionClass": "toast-top-right",
                  "preventDuplicates": false,
                  "onclick": null,
                  "showDuration": "300",
                  "hideDuration": "1000",
                  "timeOut": "5000",
                  "extendedTimeOut": "1000",
                  "showEasing": "swing",
                  "hideEasing": "linear",
                  "showMethod": "fadeIn",
                  "hideMethod": "fadeOut"
                }
                toastr["success"]( "Welcome to student Result Management System!");





            });

function sh1(){
  // alert(document.getElementById('hid1').style.display);

  if(document.getElementById('hid1').style.display=="none"){
    document.getElementById('hid1').style.display="block";
   
  }
  else{
    document.getElementById('hid1').style.display="none";
  }        
  }



function sh2(){
  // alert(document.getElementById('hid1').style.display);

  if(document.getElementById('hid2').style.display=="none"){
    document.getElementById('hid2').style.display="block";
  
     document.getElementById('plus').style.mstransform = "rotate(270deg)";
     document.getElementById('plus').style.transform = "rotate(270deg)";
  }
  else{
    document.getElementById('hid2').style.display="none";
  }        
  }
        </script>
    </body>
</html>

