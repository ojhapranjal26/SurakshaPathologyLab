<?php include "header.php"; ?>

<!-- Main Content Area -->
<div class="container p-4">
    <h1>Test Results</h1>
    <form action="Print Report/print_report.php" method="post" target="_blank">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Test</th>
                    <th scope="col">Subtest</th>
                    <th scope="col">Result</th>
                    <th scope="col">Normal Range</th>
                    <th scope="col">Units</th>
                </tr>
            </thead>
            <tbody>
                <!-- CBC Test -->
                <tr>
                    <td rowspan="8">Complete Blood Count (CBC)</td>
                    <td>White Blood Cell (WBC) count</td>
                    <td><input type="text" name="wbc_result" class="form-control" /></td>
                    <td>4,500 - 11,000</td>
                    <td>cells/mcL</td>
                </tr>
                <tr>
                    <td>Red Blood Cell (RBC) count</td>
                    <td><input type="text" name="rbc_result" class="form-control" /></td>
                    <td>Men: 4.7 - 6.1<br>Women: 4.2 - 5.4</td>
                    <td>million cells/mcL</td>
                </tr>
                <tr>
                    <td>Hemoglobin (HGB)</td>
                    <td><input type="text" name="hgb_result" class="form-control" /></td>
                    <td>Men: 13.8 - 17.2<br>Women: 12.1 - 15.1</td>
                    <td>g/dL</td>
                </tr>
                <tr>
                    <td>Hematocrit (HCT)</td>
                    <td><input type="text" name="hct_result" class="form-control" /></td>
                    <td>Men: 40.7% - 50.3%<br>Women: 36.1% - 44.3%</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>Platelet count</td>
                    <td><input type="text" name="platelet_result" class="form-control" /></td>
                    <td>150,000 - 450,000</td>
                    <td>cells/mcL</td>
                </tr>
                <tr>
                    <td>Mean Corpuscular Volume (MCV)</td>
                    <td><input type="text" name="mcv_result" class="form-control" /></td>
                    <td>80 - 100</td>
                    <td>fL</td>
                </tr>
                <tr>
                    <td>Mean Corpuscular Hemoglobin (MCH)</td>
                    <td><input type="text" name="mch_result" class="form-control" /></td>
                    <td>27 - 31</td>
                    <td>pg/cell</td>
                </tr>
                <tr>
                    <td>Mean Corpuscular Hemoglobin Concentration (MCHC)</td>
                    <td><input type="text" name="mchc_result" class="form-control" /></td>
                    <td>32% - 36%</td>
                    <td>%</td>
                </tr>

                <!-- Liver Function Tests (LFT) -->
                <tr>
                    <td rowspan="6">Liver Function Tests (LFT)</td>
                    <td>Alanine Aminotransferase (ALT)</td>
                    <td><input type="text" name="alt_result" class="form-control" /></td>
                    <td>7 - 56</td>
                    <td>U/L</td>
                </tr>
                <tr>
                    <td>Aspartate Aminotransferase (AST)</td>
                    <td><input type="text" name="ast_result" class="form-control" /></td>
                    <td>10 - 40</td>
                    <td>U/L</td>
                </tr>
                <tr>
                    <td>Alkaline Phosphatase (ALP)</td>
                    <td><input type="text" name="alp_result" class="form-control" /></td>
                    <td>44 - 147</td>
                    <td>U/L</td>
                </tr>
                <tr>
                    <td>Gamma-Glutamyl Transferase (GGT)</td>
                    <td><input type="text" name="ggt_result" class="form-control" /></td>
                    <td>9 - 48</td>
                    <td>U/L</td>
                </tr>
                <tr>
                    <td>Total Bilirubin</td>
                    <td><input type="text" name="total_bilirubin_result" class="form-control" /></td>
                    <td>0.1 - 1.2</td>
                    <td>mg/dL</td>
                </tr>
                <tr>
                    <td>Direct Bilirubin</td>
                    <td><input type="text" name="direct_bilirubin_result" class="form-control" /></td>
                    <td>0 - 0.3</td>
                    <td>mg/dL</td>
                </tr>

                <!-- Kidney Function Tests (KFT) -->
                <tr>
                    <td rowspan="5">Kidney Function Tests (KFT)</td>
                    <td>Serum Creatinine</td>
                    <td><input type="text" name="creatinine_result" class="form-control" /></td>
                    <td>0.6 - 1.2</td>
                    <td>mg/dL</td>
                </tr>
                <tr>
                    <td>Blood Urea Nitrogen (BUN)</td>
                    <td><input type="text" name="bun_result" class="form-control" /></td>
                    <td>7 - 20</td>
                    <td>mg/dL</td>
                </tr>
                <tr>
                    <td>Uric Acid</td>
                    <td><input type="text" name="uric_acid_result" class="form-control" /></td>
                    <td>3.5 - 7.2</td>
                    <td>mg/dL</td>
                </tr>
                <tr>
                    <td>eGFR</td>
                    <td><input type="text" name="egfr_result" class="form-control" /></td>
                    <td>90 - 120</td>
                    <td>mL/min/1.73m²</td>
                </tr>
                <tr>
                    <td>Protein</td>
                    <td><input type="text" name="protein_result" class="form-control" /></td>
                    <td>6.0 - 8.3</td>
                    <td>g/dL</td>
                </tr>

                <!-- Lipid Profile -->
                <tr>
                    <td rowspan="4">Lipid Profile</td>
                    <td>Total Cholesterol</td>
                    <td><input type="text" name="total_cholesterol_result" class="form-control" /></td>
                    <td>< 200</td>
                    <td>mg/dL</td>
                </tr>
                <tr>
                    <td>Low-Density Lipoprotein (LDL)</td>
                    <td><input type="text" name="ldl_result" class="form-control" /></td>
                    <td>< 100</td>
                    <td>mg/dL</td>
                </tr>
                <tr>
                    <td>High-Density Lipoprotein (HDL)</td>
                    <td><input type="text" name="hdl_result" class="form-control" /></td>
                    <td>Men: > 40<br>Women: > 50</td>
                    <td>mg/dL</td>
                </tr>
                <tr>
                    <td>Triglycerides</td>
                    <td><input type="text" name="triglycerides_result" class="form-control" /></td>
                    <td>< 150</td>
                    <td>mg/dL</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit and Print Report</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        function highlightFields() {
            const ranges = {
                wbc_result: { min: 4500, max: 11000 },
                rbc_result: { min: 4.2, max: 6.1 },
                hgb_result: { min: 12.1, max: 17.2 },
                hct_result: { min: 36.1, max: 50.3 },
                platelet_result: { min: 150000, max: 450000 },
                mcv_result: { min: 80, max: 100 },
                mch_result: { min: 27, max: 31 },
                mchc_result: { min: 32, max: 36 },
                // Add ranges for other tests here
                alt_result: { min: 7, max: 56 },
                ast_result: { min: 10, max: 40 },
                alp_result: { min: 44, max: 147 },
                ggt_result: { min: 9, max: 48 },
                total_bilirubin_result: { min: 0.1, max: 1.2 },
                direct_bilirubin_result: { min: 0, max: 0.3 },
                creatinine_result: { min: 0.6, max: 1.2 },
                bun_result: { min: 7, max: 20 },
                uric_acid_result: { min: 3.5, max: 7.2 },
                egfr_result: { min: 90, max: 120 },
                protein_result: { min: 6.0, max: 8.3 },
                total_cholesterol_result: { max: 200 },
                ldl_result: { max: 100 },
                hdl_result: { min_men: 40, min_women: 50 },
                triglycerides_result: { max: 150 }
            };

            Object.keys(ranges).forEach(function (field) {
                const input = document.querySelector(`input[name=${field}]`);
                if (input) {
                    input.addEventListener('input', function () {
                        const value = parseFloat(input.value);
                        const range = ranges[field];
                        let isValid = true;

                        if (field === 'hdl_result') {
                            const gender = document.querySelector('input[name=gender]').value; // Assuming there's a gender field
                            if (gender === 'Men' && value < range.min_men) {
                                isValid = false;
                            } else if (gender === 'Women' && value < range.min_women) {
                                isValid = false;
                            }
                        } else if (value < (range.min || -Infinity) || value > (range.max || Infinity)) {
                            isValid = false;
                        }

                        input.style.backgroundColor = isValid ? '' : '#f8d7da'; // Light red for out of range
                    });
                }
            });
        }

        highlightFields();
    });
</script>

<?php include "footer.php"; ?>
