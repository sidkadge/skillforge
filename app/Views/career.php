<?php include('header.php') ?>
<style>
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: #e1d6d6;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    .form-group button {
        padding: 10px 15px;
        background-color: #28a745;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    .form-group button:hover {
        background-color: #218838;
    }
    .form-group .checkbox-group {
        display: flex;
        flex-wrap: wrap;
    }
    .form-group .checkbox-group label {
        margin-right: 10px;
    }
</style>

<div class="form-container">
    <h2>Career Application Form</h2>
    <form id="careerForm" action="<?php echo base_url('career'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="position">Position Applied For</label>
            <input type="text" id="position" name="position" required>
        </div>
        <div class="form-group">
            <label for="skills">Skills</label>
            <div class="checkbox-group">
                <?php if (!empty($facultyskill)): ?>
                    <?php foreach ($facultyskill as $skill): ?>
                        <label>
                            <input type="checkbox" name="skills[]" value="<?php echo htmlspecialchars($skill['facultyskill']); ?>">
                            <?php echo htmlspecialchars($skill['facultyskill']); ?>
                        </label>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No skills available.</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="resume">Upload Resume</label>
            <input type="file" id="resume" name="resume" required>
        </div>
        <div class="form-group">
            <label for="coverLetter">Cover Letter</label>
            <textarea id="coverLetter" name="coverLetter" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Submit Application</button>
        </div>
    </form>
</div>

<?php include('footer.php') ?>
