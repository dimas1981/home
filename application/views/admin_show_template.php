<div class="content users-table-page">
        <div class="ym-fbox ym-form region-select-block">
            <label class="ym-inline" for="show-region">Region</label>
            <select id="show-region" name="show-region">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option value="0">All regions</option>
                <option value="1">San Diego, CA, United States</option>
                <option value="2">Utrecht, Nederland</option>
                <option value="3">Dfoun, Mount Lebanon, Lebanon</option>
            </select>
        </div>
<table class="bordertable narrow">
    <thead>
	<tr>
            <th>Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Birthdate</th>
            <th>Region</th>
            <th>Action</th>
	</tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i < 25; $i++): ?>
	<tr>
            <td>Anna</td>
            <td>Volkova</td>
            <td>anna@mail.ru</td>
            <td>24-03-1981</td>
            <td>Kharkiv, Kharkiv Oblast, Ukraine</td>
            <td><a href="edit/id_df67sr4s">Edit</a></td>
	</tr>
        <?php endfor; ?>
    </tbody>
</table>
    {pagination}
</div>