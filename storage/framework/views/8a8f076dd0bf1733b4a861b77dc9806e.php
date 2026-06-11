<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #3b82f6; color: white; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9fafb; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #6b7280; }
        .value { margin-top: 5px; }
        .footer { padding: 20px; text-align: center; font-size: 12px; color: #9ca3af; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Message</h1>
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Name:</div>
                <div class="value"><?php echo e($contact->name); ?></div>
            </div>
            <div class="field">
                <div class="label">Email:</div>
                <div class="value"><?php echo e($contact->email); ?></div>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($contact->subject): ?>
            <div class="field">
                <div class="label">Subject:</div>
                <div class="value"><?php echo e($contact->subject); ?></div>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div class="field">
                <div class="label">Message:</div>
                <div class="value"><?php echo e($contact->message); ?></div>
            </div>
        </div>
        <div class="footer">
            <p>This message was sent from your portfolio website.</p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-portfolio\resources\views/emails/contact.blade.php ENDPATH**/ ?>