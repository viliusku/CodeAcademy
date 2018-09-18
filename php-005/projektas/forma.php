<?php
include 'header.php';
include 'euroleague_class.php';

$o = new teams("localhost", "bandymas", "bandymas", "bandymas");

if (isset($_POST['submit'])){
    $item = [
        'team_id' => $_POST['team_id'],
        'team_logo' => trim($_POST['team_logo']),
        'team_name' => trim($_POST['team_name']),
        'team_country' => trim($_POST['team_country']),
        'team_coach' => trim($_POST['team_coach']),
        'team_president' => trim($_POST['team_president']),
        'team_address' => trim($_POST['team_address']),
        'team_arena' => trim($_POST['team_arena']),
        'team_phone' => trim($_POST['team_phone']),
        'team_url' => trim($_POST['team_url'])
    ];
    if (strlen($item['team_id']) == 0) $rc = $o->teamCreate($item);
    else $rc = $o->teamUpdate($item);
    if ($rc) header('location: sarasas.php');
    else echo $o->message;
}
else {
    if (isset($_POST['edit'])){
        $item = $o->teamGet($_POST['edit']);
    }
    elseif (isset($_POST['delete'])){
        $o->teamDelete($_POST['delete']);
        header('location: sarasas.php');
    }
    else {
        $item = [
            'team_id' => '',
            'team_logo' => '',
            'team_name' => '',
            'team_country' => '',
            'team_coach' => '',
            'team_president' => '',
            'team_address' => '',
            'team_arena' => '',
            'team_phone' => '',
            'team_url' => ''
        ];
    }
    ?>
    <form method="post">
        <div class="form-group">
            <label for="team_logo">Logo:</label>
            <input type="text" class="form-control" id="team_logo" name="team_logo" value="<?php echo $item['team_logo'] ?>">
            <label for="team_name">Pavadinimas:</label>
            <input type="text" class="form-control" id="team_name" name="team_name" value="<?php echo $item['team_name'] ?>">
            <label for="team_country">Šalis:</label>
            <input type="text" class="form-control" id="team_country" name="team_country" value="<?php echo $item['team_country'] ?>">
            <label for="team_coach">Treneris:</label>
            <input type="text" class="form-control" id="team_coach" name="team_coach" value="<?php echo $item['team_coach'] ?>">
            <label for="team_president">Prezidentas:</label>
            <input type="text" class="form-control" id="team_president" name="team_president" value="<?php echo $item['team_president'] ?>">
            <label for="team_address">Adresas:</label>
            <textarea class="form-control" id="team_address" name="team_address"><?php echo $item['team_address'] ?></textarea>
            <label for="team_arena">Arena:</label>
            <input type="text" class="form-control" id="team_arena" name="team_arena" value="<?php echo $item['team_arena'] ?>">
            <label for="team_phone">Telefonas:</label>
            <input type="text" class="form-control" id="team_phone" name="team_phone" value="<?php echo $item['team_phone'] ?>">
            <label for="team_url">URL:</label>
            <input type="text" class="form-control" id="team_url" name="team_url" value="<?php echo $item['team_url'] ?>">
            <button type="submit" class="btn btn-primary mt-1" name="submit">Vykdyti</button>
        </div>
        <input type="hidden" name="team_id" value="<?php echo $item['team_id'] ?>">
    </form>
    <?php
}