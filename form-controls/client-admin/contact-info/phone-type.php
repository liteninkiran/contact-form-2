
                <div class="tooltip">
                    <p>
                        <label for="phone-type">Phone Type</label>
                        <select name="phone-type" id="phone-type" onchange="enable('phone-number')" oninput="this.className = ''">
                            <option value="" disabled selected>Choose phone type from drop down</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Landline">Landline</option>
                        </select>
                    </p>
                    <span class="tooltiptext">Choose phone type from drop down to enable Phone Number</span>
                </div>
