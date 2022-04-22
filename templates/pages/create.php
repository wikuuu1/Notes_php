<div>
    <h3>Stwórz nową notatkę</h3>
    <div>
        <form class="note-form" action="/?action=create" method="post">
            <ul>
                <?php dump($params)?>
                <li>
                    <label>Tytuł <span class="required">*</span> </label>
                    <input type="text" name="title" class="field-long" />
                </li>
                <li>
                    <label>Opis</label>
                    <textarea name="description" id="fields" class="field-long field-textarea"></textarea>
                </li>
                <li>
                    <input type="submit" value="Submit">
                </li>
            </ul>
        </form>
    </div>
</div>