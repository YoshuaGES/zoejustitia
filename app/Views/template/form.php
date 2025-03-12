<form class="consultation-form">
    <div class="row g-3">
        <div class="col-md-6">
            <input type="text" name='name' class="form-control border-0 bg-light px-4" placeholder='<?php echo lang('Info.form-email.name'); ?>' style="height: 55px;" required>
        </div>
        <div class="col-md-6">
            <input type="email"  name='email' class="form-control border-0 bg-light px-4" placeholder='<?php echo lang('Info.form-email.email'); ?>' style="height: 55px;" required>
        </div>
        <div class="col-12">
            <select class="form-select bg-light border-0" name='service' style="height: 55px;">
                <option value="No Category" selected><?php echo lang('Info.form-email.select-service'); ?></option>
                <option value="Legal Consultation"><?php echo lang('Info.services.legal-consultation'); ?></option>
                <option value="General Litigation"><?php echo lang('Info.services.general-litigation'); ?></option>
                <option value="Corporate Law"><?php echo lang('Info.services.corporate-law'); ?></option>
            </select>
        </div>
        <div class="col-12">
            <input type="text" name='subject' class="form-control border-0 bg-light px-4" placeholder='<?php echo lang('Info.form-email.subject'); ?>' style="height: 55px;" required>
        </div>
        <div class="col-12">
            <textarea class="form-control border-0 bg-light px-4 py-3" name="message" rows="4" placeholder='<?php echo lang('Info.form-email.message'); ?>'required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit"><?php echo lang('Info.form-email.send-message'); ?></button>
        </div>
    </div>
</form>