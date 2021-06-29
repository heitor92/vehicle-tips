require('./bootstrap');

/** 
 * Script JS do User
 */
import {SignUpUser,LoginUser} from './vehicle-tips/user';
window.SignUpUser = SignUpUser;
window.LoginUser = LoginUser;

/**
 * Script JS do Vehicle tips
 */

import {UpsertTips} from './vehicle-tips/vehicle-tips';
window.UpsertTips = UpsertTips;