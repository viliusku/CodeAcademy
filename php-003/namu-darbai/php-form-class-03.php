<?php
/**
Sukurti formą + php (viename faile - nereikia nurodyti formoje action), kuriame sukurti individualios veiklos mokesčių skaičiuoklę pagal https://www.tax.lt/skaiciuokles/individualios_veiklos_mokesciu_skaiciuokle (tik už 2018 metus).
 */
?>
<form method="post">
    <div>
      <label> Gautos pajamos </label>
      <div>
        <input name="pajamos" type="text" value="<?php if (isset($_POST['pajamos'])) echo $_POST['pajamos'] ?>">
      </div>
    </div>
    <div>
      <label>Patirtos sąnaudos </label>
      <div>
        <input name="sanaudos" type="text" value="<?php if (isset($_POST['sanaudos'])) echo $_POST['sanaudos'] ?>">
      </div>
    </div>
    <div>
      <label> Sumokėtas PSD </label>
      <div>
        <input name="sumoketas_psd" type="text" value="<?php if (isset($_POST['sumoketas_psd'])) echo $_POST['sumoketas_psd'] ?>">
      </div>
    </div>
    <div>
      <label> Sumokėtas VSD </label>
      <div>
        <input name="sumoketas_vsd" type="text"  value="<?php if (isset($_POST['sumoketas_vsd'])) echo $_POST['sumoketas_vsd'] ?>">
      </div>
    </div>
    <div>
      <label>Sąnaudų skaičiavimas</label>
      <div>
        <label><input name="kaip_skaiciuojamos_sanaudos"value="0" <?php if (isset($_POST['kaip_skaiciuojamos_sanaudos']) && $_POST['kaip_skaiciuojamos_sanaudos'] == '0') echo 'checked="checked"' ?> type="radio">   Faktiškai patirtos</label>
        <label"><input name="kaip_skaiciuojamos_sanaudos" value="30"  <?php if ((isset($_POST['kaip_skaiciuojamos_sanaudos']) && $_POST['kaip_skaiciuojamos_sanaudos'] == '30') or !isset($_POST['kaip_skaiciuojamos_sanaudos'])) echo 'checked="checked"' ?> type="radio"> 30% nuo pajamų</label>
      </div>
    </div>
    <div>
      <label>GPM tarifas</label>
      <div>
        <label class="radio"><input name="gpm_tarifas" value="5" <?php if (isset($_POST['gpm_tarifas']) && $_POST['gpm_tarifas'] == '5') echo 'checked="checked"' ?> type="radio"> 5%</label>
        <label class="radio"><input name="gpm_tarifas" value="15" <?php if ((isset($_POST['gpm_tarifas']) && $_POST['gpm_tarifas'] == '15') or !isset($_POST['gpm_tarifas'])) echo 'checked="checked"' ?> type="radio"> 15% </label>
      </div>
    </div>
    <input type="submit" value="Skaičiuoti">
</form>

<?php if (count($_POST)>0){ ?>

<table>
    <tr>
        <td colspan="3">Pajamos</td>
        <td><?php echo $_POST['pajamos'] ?></td>
    </tr>
    <tr>
        <td colspan="3">Sąnaudos</td>
        <td>
            <?php
                if ($_POST['kaip_skaiciuojamos_sanaudos'] == '30') { $sanaudos =  $_POST['pajamos'] * 0.3; }
                else { $sanaudos = $_POST['sanaudos']; }
                echo $sanaudos;
            ?>
        </td>
    </tr>
    <tr>
        <td colspan="3">Apmokestinamosios pajamos:</td>
        <td>
            <?php
            echo $_POST['pajamos'] - $sanaudos;
            ?>
        </td>
    </tr>
    <tr>
        <td>Sodra</td>
        <td>VSD (29,7%)</td>
        <td>PSD (9%)</td>
        <td>Iš viso</td>
    </tr>
    <tr>
        <td>Priskaičiuota:</td>
        <td><?php echo $vsd = round((($_POST['pajamos'] - $sanaudos) / 2) * 0.297, 2) ?></td>
        <td><?php echo $psd = round((($_POST['pajamos'] - $sanaudos) / 2) * 0.09, 2) ?></td>
        <td><?php echo $priskaiciuota = $vsd + $psd ?></td>
    </tr>
    <tr>
        <td>Sumokėta:</td>
        <td><?php echo (int)$_POST['sumoketas_vsd'] ?></td>
        <td><?php echo (int)$_POST['sumoketas_psd'] ?></td>
        <td><?php echo (int)$_POST['sumoketas_vsd'] + (int)$_POST['sumoketas_psd'] ?></td>
    </tr>
    <tr>
        <td colspan="2">Gyventojų pajamų mokestis</td>
        <td>Tarifas</td>
        <td>Suma</td>
    </tr>
    <tr>
        <td colspan="2">GPM:</td>
        <td><?php echo $_POST['gpm_tarifas'] ?></td>
        <td><?php echo $gpm = (($_POST['pajamos'] - $sanaudos) * $_POST['gpm_tarifas']) / 100 ?></td>
    </tr>
    <tr>
        <td colspan="4">Iš viso</td>
    </tr>
    <tr>
        <td colspan="3">Iš viso mokesčių:</td>
        <td>
            <?php
            echo $priskaiciuota + $gpm;
            ?>
        </td>
    </tr>
    <tr>
        <td colspan="3">Mokestinė našta:</td>
        <td>
            <?php
            echo round((($priskaiciuota + $gpm) / $_POST['pajamos']) * 100, 2) . ' %';
            ?>
        </td>
    </tr>
    <tr>
        <td colspan="3">Grynasis pelnas:</td>
        <td>
            <?php
            echo $_POST['pajamos'] - ($priskaiciuota + $gpm);
            ?>
        </td>
    </tr>
</table>

<?php } ?>