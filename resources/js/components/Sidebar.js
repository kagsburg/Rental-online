

import Link from 'react-dom'
import { useLocation } from "react-router-dom";
import React, { Component } from 'react'
import {NavLink} from 'react-router-dom'


  const Sidebar = () => {
    //assigning location variable
    const location = useLocation();

    //destructuring pathname from location
    const { pathname } = location;

    //Javascript split method to get the name of the path in array
    const splitLocation = pathname.split("/");
  
        return (
            <div>
         <section>
           {/* Left Sidebar */}
           <aside id="leftsidebar" className="sidebar">
             {/* User Info */}
             <div className="user-info">
               <div className="image">
                 <img src="images/user.png" width={48} height={48} alt="User" />
               </div>
               <div className="info-container">
                 <div className="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                 <div className="email">john.doe@example.com</div>
                 <div className="btn-group user-helper-dropdown">
                   <i className="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                   <ul className="dropdown-menu pull-right">
                     <li><a href="javascript:void(0);"><i className="material-icons">person</i>Profile</a></li>
                     <li role="separator" className="divider" />
                     <li><a href="javascript:void(0);"><i className="material-icons">group</i>Followers</a></li>
                     <li><a href="javascript:void(0);"><i className="material-icons">shopping_cart</i>Sales</a></li>
                     <li><a href="javascript:void(0);"><i className="material-icons">favorite</i>Likes</a></li>
                     <li role="separator" className="divider" />
                     <li><a href="javascript:void(0);"><i className="material-icons">input</i>Sign Out</a></li>
                   </ul>
                 </div>
               </div>
             </div>
             {/* #User Info */}
             {/* Menu */}
             <div className="menu">
               <ul className="list">
                 <li className="header">MAIN NAVIGATION</li>
                 <li className="active">
                   <a href="index.html">
                     <i className="material-icons">home</i>
                     <span>Home</span>
                   </a>
                 </li>
                 <li>
                   <a href="pages/typography.html">
                     <i className="material-icons">text_fields</i>
                     <span>Typography</span>
                   </a>
                 </li>
                 <li>
                   <a href="pages/helper-classes.html">
                     <i className="material-icons">layers</i>
                     <span>Helper Classes</span>
                   </a>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">widgets</i>
                     <span>LandLords</span>
                   </a>
                   <ul className="ml-menu">
                     <li className={splitLocation[1] === "All_landlord" ? "active" : ""}>
                     <NavLink exact activeClassName="active" to='/All_landlord' > <i class="material-icons">visibility</i>  <span>View LandLords</span></NavLink>
                       
                     </li>
                     <li className={splitLocation[1] === "Add_landlord" ? "active" : ""}>
                     <NavLink exact activeClassName="active" to='/Add_landlord' > <i class="material-icons">person_add</i> <span>Create LandLords</span></NavLink>
                     
                     </li>
                    
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">swap_calls</i>
                     <span>User Interface (UI)</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="pages/ui/alerts.html">Alerts</a>
                     </li>
                     <li>
                       <a href="pages/ui/animations.html">Animations</a>
                     </li>
                     <li>
                       <a href="pages/ui/badges.html">Badges</a>
                     </li>
                     <li>
                       <a href="pages/ui/breadcrumbs.html">Breadcrumbs</a>
                     </li>
                     <li>
                       <a href="pages/ui/buttons.html">Buttons</a>
                     </li>
                     <li>
                       <a href="pages/ui/collapse.html">Collapse</a>
                     </li>
                     <li>
                       <a href="pages/ui/colors.html">Colors</a>
                     </li>
                     <li>
                       <a href="pages/ui/dialogs.html">Dialogs</a>
                     </li>
                     <li>
                       <a href="pages/ui/icons.html">Icons</a>
                     </li>
                     <li>
                       <a href="pages/ui/labels.html">Labels</a>
                     </li>
                     <li>
                       <a href="pages/ui/list-group.html">List Group</a>
                     </li>
                     <li>
                       <a href="pages/ui/media-object.html">Media Object</a>
                     </li>
                     <li>
                       <a href="pages/ui/modals.html">Modals</a>
                     </li>
                     <li>
                       <a href="pages/ui/notifications.html">Notifications</a>
                     </li>
                     <li>
                       <a href="pages/ui/pagination.html">Pagination</a>
                     </li>
                     <li>
                       <a href="pages/ui/preloaders.html">Preloaders</a>
                     </li>
                     <li>
                       <a href="pages/ui/progressbars.html">Progress Bars</a>
                     </li>
                     <li>
                       <a href="pages/ui/range-sliders.html">Range Sliders</a>
                     </li>
                     <li>
                       <a href="pages/ui/sortable-nestable.html">Sortable &amp; Nestable</a>
                     </li>
                     <li>
                       <a href="pages/ui/tabs.html">Tabs</a>
                     </li>
                     <li>
                       <a href="pages/ui/thumbnails.html">Thumbnails</a>
                     </li>
                     <li>
                       <a href="pages/ui/tooltips-popovers.html">Tooltips &amp; Popovers</a>
                     </li>
                     <li>
                       <a href="pages/ui/waves.html">Waves</a>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">assignment</i>
                     <span>Forms</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="pages/forms/basic-form-elements.html">Basic Form Elements</a>
                     </li>
                     <li>
                       <a href="pages/forms/advanced-form-elements.html">Advanced Form Elements</a>
                     </li>
                     <li>
                       <a href="pages/forms/form-examples.html">Form Examples</a>
                     </li>
                     <li>
                       <a href="pages/forms/form-validation.html">Form Validation</a>
                     </li>
                     <li>
                       <a href="pages/forms/form-wizard.html">Form Wizard</a>
                     </li>
                     <li>
                       <a href="pages/forms/editors.html">Editors</a>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">view_list</i>
                     <span>Tables</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="pages/tables/normal-tables.html">Normal Tables</a>
                     </li>
                     <li>
                       <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                     </li>
                     <li>
                       <a href="pages/tables/editable-table.html">Editable Tables</a>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">perm_media</i>
                     <span>Medias</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="pages/medias/image-gallery.html">Image Gallery</a>
                     </li>
                     <li>
                       <a href="pages/medias/carousel.html">Carousel</a>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">pie_chart</i>
                     <span>Charts</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="pages/charts/morris.html">Morris</a>
                     </li>
                     <li>
                       <a href="pages/charts/flot.html">Flot</a>
                     </li>
                     <li>
                       <a href="pages/charts/chartjs.html">ChartJS</a>
                     </li>
                     <li>
                       <a href="pages/charts/sparkline.html">Sparkline</a>
                     </li>
                     <li>
                       <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">content_copy</i>
                     <span>Example Pages</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="pages/examples/profile.html">Profile</a>
                     </li>
                     <li>
                       <a href="pages/examples/sign-in.html">Sign In</a>
                     </li>
                     <li>
                       <a href="pages/examples/sign-up.html">Sign Up</a>
                     </li>
                     <li>
                       <a href="pages/examples/forgot-password.html">Forgot Password</a>
                     </li>
                     <li>
                       <a href="pages/examples/blank.html">Blank Page</a>
                     </li>
                     <li>
                       <a href="pages/examples/404.html">404 - Not Found</a>
                     </li>
                     <li>
                       <a href="pages/examples/500.html">500 - Server Error</a>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">map</i>
                     <span>Maps</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="pages/maps/google.html">Google Map</a>
                     </li>
                     <li>
                       <a href="pages/maps/yandex.html">YandexMap</a>
                     </li>
                     <li>
                       <a href="pages/maps/jvectormap.html">jVectorMap</a>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="javascript:void(0);" className="menu-toggle">
                     <i className="material-icons">trending_down</i>
                     <span>Multi Level Menu</span>
                   </a>
                   <ul className="ml-menu">
                     <li>
                       <a href="javascript:void(0);">
                         <span>Menu Item</span>
                       </a>
                     </li>
                     <li>
                       <a href="javascript:void(0);">
                         <span>Menu Item - 2</span>
                       </a>
                     </li>
                     <li>
                       <a href="javascript:void(0);" className="menu-toggle">
                         <span>Level - 2</span>
                       </a>
                       <ul className="ml-menu">
                         <li>
                           <a href="javascript:void(0);">
                             <span>Menu Item</span>
                           </a>
                         </li>
                         <li>
                           <a href="javascript:void(0);" className="menu-toggle">
                             <span>Level - 3</span>
                           </a>
                           <ul className="ml-menu">
                             <li>
                               <a href="javascript:void(0);">
                                 <span>Level - 4</span>
                               </a>
                             </li>
                           </ul>
                         </li>
                       </ul>
                     </li>
                   </ul>
                 </li>
                 <li>
                   <a href="pages/changelogs.html">
                     <i className="material-icons">update</i>
                     <span>Changelogs</span>
                   </a>
                 </li>
                 <li className="header">LABELS</li>
                 <li>
                   <a href="javascript:void(0);">
                     <i className="material-icons col-red">donut_large</i>
                     <span>Important</span>
                   </a>
                 </li>
                 <li>
                   <a href="javascript:void(0);">
                     <i className="material-icons col-amber">donut_large</i>
                     <span>Warning</span>
                   </a>
                 </li>
                 <li>
                   <a href="javascript:void(0);">
                     <i className="material-icons col-light-blue">donut_large</i>
                     <span>Information</span>
                   </a>
                 </li>
               </ul>
             </div>
             {/* #Menu */}
             {/* Footer */}
             <div className="legal">
               <div className="copyright">
                 © 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
               </div>
               <div className="version">
                 <b>Version: </b> 1.0.5
               </div>
             </div>
             {/* #Footer */}
           </aside>
           {/* #END# Left Sidebar */}
           {/* Right Sidebar */}
           <aside id="rightsidebar" className="right-sidebar">
             <ul className="nav nav-tabs tab-nav-right" role="tablist">
               <li role="presentation" className="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
               <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
             </ul>
             <div className="tab-content">
               <div role="tabpanel" className="tab-pane fade in active in active" id="skins">
                 <ul className="demo-choose-skin">
                   <li data-theme="red" className="active">
                     <div className="red" />
                     <span>Red</span>
                   </li>
                   <li data-theme="pink">
                     <div className="pink" />
                     <span>Pink</span>
                   </li>
                   <li data-theme="purple">
                     <div className="purple" />
                     <span>Purple</span>
                   </li>
                   <li data-theme="deep-purple">
                     <div className="deep-purple" />
                     <span>Deep Purple</span>
                   </li>
                   <li data-theme="indigo">
                     <div className="indigo" />
                     <span>Indigo</span>
                   </li>
                   <li data-theme="blue">
                     <div className="blue" />
                     <span>Blue</span>
                   </li>
                   <li data-theme="light-blue">
                     <div className="light-blue" />
                     <span>Light Blue</span>
                   </li>
                   <li data-theme="cyan">
                     <div className="cyan" />
                     <span>Cyan</span>
                   </li>
                   <li data-theme="teal">
                     <div className="teal" />
                     <span>Teal</span>
                   </li>
                   <li data-theme="green">
                     <div className="green" />
                     <span>Green</span>
                   </li>
                   <li data-theme="light-green">
                     <div className="light-green" />
                     <span>Light Green</span>
                   </li>
                   <li data-theme="lime">
                     <div className="lime" />
                     <span>Lime</span>
                   </li>
                   <li data-theme="yellow">
                     <div className="yellow" />
                     <span>Yellow</span>
                   </li>
                   <li data-theme="amber">
                     <div className="amber" />
                     <span>Amber</span>
                   </li>
                   <li data-theme="orange">
                     <div className="orange" />
                     <span>Orange</span>
                   </li>
                   <li data-theme="deep-orange">
                     <div className="deep-orange" />
                     <span>Deep Orange</span>
                   </li>
                   <li data-theme="brown">
                     <div className="brown" />
                     <span>Brown</span>
                   </li>
                   <li data-theme="grey">
                     <div className="grey" />
                     <span>Grey</span>
                   </li>
                   <li data-theme="blue-grey">
                     <div className="blue-grey" />
                     <span>Blue Grey</span>
                   </li>
                   <li data-theme="black">
                     <div className="black" />
                     <span>Black</span>
                   </li>
                 </ul>
               </div>
               <div role="tabpanel" className="tab-pane fade" id="settings">
                 <div className="demo-settings">
                   <p>GENERAL SETTINGS</p>
                   <ul className="setting-list">
                     <li>
                       <span>Report Panel Usage</span>
                       <div className="switch">
                         <label><input type="checkbox" defaultChecked /><span className="lever" /></label>
                       </div>
                     </li>
                     <li>
                       <span>Email Redirect</span>
                       <div className="switch">
                         <label><input type="checkbox" /><span className="lever" /></label>
                       </div>
                     </li>
                   </ul>
                   <p>SYSTEM SETTINGS</p>
                   <ul className="setting-list">
                     <li>
                       <span>Notifications</span>
                       <div className="switch">
                         <label><input type="checkbox" defaultChecked /><span className="lever" /></label>
                       </div>
                     </li>
                     <li>
                       <span>Auto Updates</span>
                       <div className="switch">
                         <label><input type="checkbox" defaultChecked /><span className="lever" /></label>
                       </div>
                     </li>
                   </ul>
                   <p>ACCOUNT SETTINGS</p>
                   <ul className="setting-list">
                     <li>
                       <span>Offline</span>
                       <div className="switch">
                         <label><input type="checkbox" /><span className="lever" /></label>
                       </div>
                     </li>
                     <li>
                       <span>Location Permission</span>
                       <div className="switch">
                         <label><input type="checkbox" defaultChecked /><span className="lever" /></label>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </aside>
           {/* #END# Right Sidebar */}
         </section>
       </div>
       
           )
    
}

export default Sidebar

