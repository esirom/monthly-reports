<div class="content-wrapper">
   <h3>Make A Report</h3>
   <div class="row">
      <div class="col-md-12">
        <div id="newNetFollowers" class="panel panel-default panel-demo">
           <div class="panel-heading panel-heading-collapsed">Platforms - New Net Followers
              <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                 <em class="fa fa-plus"></em>
              </a>
           </div>
           <!-- .panel-wrapper is the element to be collapsed-->
           <div class="panel-wrapper collapse">
              <div class="panel-body">
                <div class="col-lg-12">
                   <!-- START table-responsive-->
                   <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover">
                         <thead>
                            <tr>
                               <th>Platform</th>
                               <th>Facebook</th>
                               <th>Instagram</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td>This Month</td>
                               <td><input type="text" class="form-control" value="456"></td>
                               <td><input type="text" class="form-control" value="643"></td>
                            </tr>
                            <tr>
                               <td>Last Month</td>
                               <td><input type="text" class="form-control" value="342" disabled></td>
                               <td><input type="text" class="form-control" value="523" disabled></td>
                            </tr>
                            <tr>
                               <td>Month Before That</td>
                               <td><input type="text" class="form-control" value="235" disabled></td>
                               <td><input type="text" class="form-control" value="321" disabled></td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                  <!-- END table-responsive-->
                  </div>
                </div>
              </div>
              <div class="panel-footer">
                <button type="button" class="mb-sm btn btn-primary">Save</button>
              </div>
           </div>
        </div>
   </div>
   <div class="row">
     <div class="col-md-12">
       <div id="facebookDetails" class="panel panel-default panel-demo">
          <div class="panel-heading panel-heading-collapsed">Facebook Insights
             <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                <em class="fa fa-plus"></em>
             </a>
          </div>
          <!-- .panel-wrapper is the element to be collapsed-->
          <div class="panel-wrapper collapse">
             <div class="panel-body">
                <h2>Facebook Engagement</h2>

                <h4>Likes, Comments, Shares</h4>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
                <br>

                <div class="form-group">
                   <label class="col-sm-2 control-label">Comments?</label>
                   <div class="col-sm-10">
                      <label class="switch">
                         <input type="checkbox" id="lcsComments">
                         <span></span>
                      </label>
                   </div>
                </div>


                <div class="lcsEditor" id="lcsEditor" style="display:none;">
                  <div class="form-group">
                     <div class="col-sm-12">
                        <div data-role="editor-toolbar" data-target="#editor" class="btn-toolbar btn-editor">
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font" class="btn btn-default">
                                 <em class="fa fa-font"></em><b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontName Arial" style="font-family:'Arial'">Arial</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Sans" style="font-family:'Sans'">Sans</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Serif" style="font-family:'Serif'">Serif</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font Size" class="btn btn-default">
                                 <em class="fa fa-text-height"></em>&nbsp;<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontSize 5" style="font-size:24px">Huge</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 3" style="font-size:18px">Normal</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 1" style="font-size:14px">Small</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group">
                              <a data-edit="bold" data-toggle="tooltip" title="Bold (Ctrl/Cmd+B)" class="btn btn-default">
                                 <em class="fa fa-bold"></em>
                              </a>
                              <a data-edit="italic" data-toggle="tooltip" title="Italic (Ctrl/Cmd+I)" class="btn btn-default">
                                 <em class="fa fa-italic"></em>
                              </a>
                              <a data-edit="strikethrough" data-toggle="tooltip" title="Strikethrough" class="btn btn-default">
                                 <em class="fa fa-strikethrough"></em>
                              </a>
                              <a data-edit="underline" data-toggle="tooltip" title="Underline (Ctrl/Cmd+U)" class="btn btn-default">
                                 <em class="fa fa-underline"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="insertunorderedlist" data-toggle="tooltip" title="Bullet list" class="btn btn-default">
                                 <em class="fa fa-list-ul"></em>
                              </a>
                              <a data-edit="insertorderedlist" data-toggle="tooltip" title="Number list" class="btn btn-default">
                                 <em class="fa fa-list-ol"></em>
                              </a>
                              <a data-edit="outdent" data-toggle="tooltip" title="Reduce indent (Shift+Tab)" class="btn btn-default">
                                 <em class="fa fa-dedent"></em>
                              </a>
                              <a data-edit="indent" data-toggle="tooltip" title="Indent (Tab)" class="btn btn-default">
                                 <em class="fa fa-indent"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="justifyleft" data-toggle="tooltip" title="Align Left (Ctrl/Cmd+L)" class="btn btn-default">
                                 <em class="fa fa-align-left"></em>
                              </a>
                              <a data-edit="justifycenter" data-toggle="tooltip" title="Center (Ctrl/Cmd+E)" class="btn btn-default">
                                 <em class="fa fa-align-center"></em>
                              </a>
                              <a data-edit="justifyright" data-toggle="tooltip" title="Align Right (Ctrl/Cmd+R)" class="btn btn-default">
                                 <em class="fa fa-align-right"></em>
                              </a>
                              <a data-edit="justifyfull" data-toggle="tooltip" title="Justify (Ctrl/Cmd+J)" class="btn btn-default">
                                 <em class="fa fa-align-justify"></em>
                              </a>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Hyperlink" class="btn btn-default">
                                 <em class="fa fa-link"></em>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="input-group ml-xs mr-xs">
                                    <input id="LinkInput" placeholder="URL" type="text" data-edit="createLink" class="form-control input-sm">
                                    <div class="input-group-btn">
                                       <button type="button" class="btn btn-sm btn-default">Add</button>
                                    </div>
                                 </div>
                              </div>
                              <a data-edit="unlink" data-toggle="tooltip" title="Remove Hyperlink" class="btn btn-default">
                                 <em class="fa fa-cut"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a id="pictureBtn" data-toggle="tooltip" title="Insert picture (or just drag &amp; drop)" class="btn btn-default">
                                 <em class="fa fa-picture-o"></em>
                              </a>
                              <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px">
                           </div>
                           <div class="btn-group pull-right">
                              <a data-edit="undo" data-toggle="tooltip" title="Undo (Ctrl/Cmd+Z)" class="btn btn-default">
                                 <em class="fa fa-undo"></em>
                              </a>
                              <a data-edit="redo" data-toggle="tooltip" title="Redo (Ctrl/Cmd+Y)" class="btn btn-default">
                                 <em class="fa fa-repeat"></em>
                              </a>
                           </div>
                        </div>
                        <div style="overflow:scroll; height:250px;max-height:250px" class="form-control wysiwyg mt-lg">Type something ...</div>
                     </div>
                  </div>
                </div>

                <br>

                <h4>Organic vs. Paid Reach</h4>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
                <br>

                <div class="form-group">
                   <label class="col-sm-2 control-label">Comments?</label>
                   <div class="col-sm-10">
                      <label class="switch">
                         <input type="checkbox" id="oprComments">
                         <span></span>
                      </label>
                   </div>
                </div>


                <div class="oprEditor" id="oprEditor" style="display:none;">
                  <div class="form-group">
                     <div class="col-sm-12">
                        <div data-role="editor-toolbar" data-target="#editor" class="btn-toolbar btn-editor">
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font" class="btn btn-default">
                                 <em class="fa fa-font"></em><b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontName Arial" style="font-family:'Arial'">Arial</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Sans" style="font-family:'Sans'">Sans</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Serif" style="font-family:'Serif'">Serif</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font Size" class="btn btn-default">
                                 <em class="fa fa-text-height"></em>&nbsp;<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontSize 5" style="font-size:24px">Huge</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 3" style="font-size:18px">Normal</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 1" style="font-size:14px">Small</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group">
                              <a data-edit="bold" data-toggle="tooltip" title="Bold (Ctrl/Cmd+B)" class="btn btn-default">
                                 <em class="fa fa-bold"></em>
                              </a>
                              <a data-edit="italic" data-toggle="tooltip" title="Italic (Ctrl/Cmd+I)" class="btn btn-default">
                                 <em class="fa fa-italic"></em>
                              </a>
                              <a data-edit="strikethrough" data-toggle="tooltip" title="Strikethrough" class="btn btn-default">
                                 <em class="fa fa-strikethrough"></em>
                              </a>
                              <a data-edit="underline" data-toggle="tooltip" title="Underline (Ctrl/Cmd+U)" class="btn btn-default">
                                 <em class="fa fa-underline"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="insertunorderedlist" data-toggle="tooltip" title="Bullet list" class="btn btn-default">
                                 <em class="fa fa-list-ul"></em>
                              </a>
                              <a data-edit="insertorderedlist" data-toggle="tooltip" title="Number list" class="btn btn-default">
                                 <em class="fa fa-list-ol"></em>
                              </a>
                              <a data-edit="outdent" data-toggle="tooltip" title="Reduce indent (Shift+Tab)" class="btn btn-default">
                                 <em class="fa fa-dedent"></em>
                              </a>
                              <a data-edit="indent" data-toggle="tooltip" title="Indent (Tab)" class="btn btn-default">
                                 <em class="fa fa-indent"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="justifyleft" data-toggle="tooltip" title="Align Left (Ctrl/Cmd+L)" class="btn btn-default">
                                 <em class="fa fa-align-left"></em>
                              </a>
                              <a data-edit="justifycenter" data-toggle="tooltip" title="Center (Ctrl/Cmd+E)" class="btn btn-default">
                                 <em class="fa fa-align-center"></em>
                              </a>
                              <a data-edit="justifyright" data-toggle="tooltip" title="Align Right (Ctrl/Cmd+R)" class="btn btn-default">
                                 <em class="fa fa-align-right"></em>
                              </a>
                              <a data-edit="justifyfull" data-toggle="tooltip" title="Justify (Ctrl/Cmd+J)" class="btn btn-default">
                                 <em class="fa fa-align-justify"></em>
                              </a>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Hyperlink" class="btn btn-default">
                                 <em class="fa fa-link"></em>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="input-group ml-xs mr-xs">
                                    <input id="LinkInput" placeholder="URL" type="text" data-edit="createLink" class="form-control input-sm">
                                    <div class="input-group-btn">
                                       <button type="button" class="btn btn-sm btn-default">Add</button>
                                    </div>
                                 </div>
                              </div>
                              <a data-edit="unlink" data-toggle="tooltip" title="Remove Hyperlink" class="btn btn-default">
                                 <em class="fa fa-cut"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a id="pictureBtn" data-toggle="tooltip" title="Insert picture (or just drag &amp; drop)" class="btn btn-default">
                                 <em class="fa fa-picture-o"></em>
                              </a>
                              <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px">
                           </div>
                           <div class="btn-group pull-right">
                              <a data-edit="undo" data-toggle="tooltip" title="Undo (Ctrl/Cmd+Z)" class="btn btn-default">
                                 <em class="fa fa-undo"></em>
                              </a>
                              <a data-edit="redo" data-toggle="tooltip" title="Redo (Ctrl/Cmd+Y)" class="btn btn-default">
                                 <em class="fa fa-repeat"></em>
                              </a>
                           </div>
                        </div>
                        <div style="overflow:scroll; height:250px;max-height:250px" class="form-control wysiwyg mt-lg">Type something ...</div>
                     </div>
                  </div>
                </div>

                <br>

                <h4>Top 2 Performing Posts</h4>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
                <br>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
                <br>

                <div class="form-group">
                   <label class="col-sm-2 control-label">Comments?</label>
                   <div class="col-sm-10">
                      <label class="switch">
                         <input type="checkbox" id="topPerfFbComments">
                         <span></span>
                      </label>
                   </div>
                </div>


                <div class="tpfEditor" id="topPerfFbEditor" style="display:none;">
                  <div class="form-group">
                     <div class="col-sm-12">
                        <div data-role="editor-toolbar" data-target="#editor" class="btn-toolbar btn-editor">
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font" class="btn btn-default">
                                 <em class="fa fa-font"></em><b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontName Arial" style="font-family:'Arial'">Arial</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Sans" style="font-family:'Sans'">Sans</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Serif" style="font-family:'Serif'">Serif</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font Size" class="btn btn-default">
                                 <em class="fa fa-text-height"></em>&nbsp;<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontSize 5" style="font-size:24px">Huge</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 3" style="font-size:18px">Normal</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 1" style="font-size:14px">Small</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group">
                              <a data-edit="bold" data-toggle="tooltip" title="Bold (Ctrl/Cmd+B)" class="btn btn-default">
                                 <em class="fa fa-bold"></em>
                              </a>
                              <a data-edit="italic" data-toggle="tooltip" title="Italic (Ctrl/Cmd+I)" class="btn btn-default">
                                 <em class="fa fa-italic"></em>
                              </a>
                              <a data-edit="strikethrough" data-toggle="tooltip" title="Strikethrough" class="btn btn-default">
                                 <em class="fa fa-strikethrough"></em>
                              </a>
                              <a data-edit="underline" data-toggle="tooltip" title="Underline (Ctrl/Cmd+U)" class="btn btn-default">
                                 <em class="fa fa-underline"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="insertunorderedlist" data-toggle="tooltip" title="Bullet list" class="btn btn-default">
                                 <em class="fa fa-list-ul"></em>
                              </a>
                              <a data-edit="insertorderedlist" data-toggle="tooltip" title="Number list" class="btn btn-default">
                                 <em class="fa fa-list-ol"></em>
                              </a>
                              <a data-edit="outdent" data-toggle="tooltip" title="Reduce indent (Shift+Tab)" class="btn btn-default">
                                 <em class="fa fa-dedent"></em>
                              </a>
                              <a data-edit="indent" data-toggle="tooltip" title="Indent (Tab)" class="btn btn-default">
                                 <em class="fa fa-indent"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="justifyleft" data-toggle="tooltip" title="Align Left (Ctrl/Cmd+L)" class="btn btn-default">
                                 <em class="fa fa-align-left"></em>
                              </a>
                              <a data-edit="justifycenter" data-toggle="tooltip" title="Center (Ctrl/Cmd+E)" class="btn btn-default">
                                 <em class="fa fa-align-center"></em>
                              </a>
                              <a data-edit="justifyright" data-toggle="tooltip" title="Align Right (Ctrl/Cmd+R)" class="btn btn-default">
                                 <em class="fa fa-align-right"></em>
                              </a>
                              <a data-edit="justifyfull" data-toggle="tooltip" title="Justify (Ctrl/Cmd+J)" class="btn btn-default">
                                 <em class="fa fa-align-justify"></em>
                              </a>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Hyperlink" class="btn btn-default">
                                 <em class="fa fa-link"></em>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="input-group ml-xs mr-xs">
                                    <input id="LinkInput" placeholder="URL" type="text" data-edit="createLink" class="form-control input-sm">
                                    <div class="input-group-btn">
                                       <button type="button" class="btn btn-sm btn-default">Add</button>
                                    </div>
                                 </div>
                              </div>
                              <a data-edit="unlink" data-toggle="tooltip" title="Remove Hyperlink" class="btn btn-default">
                                 <em class="fa fa-cut"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a id="pictureBtn" data-toggle="tooltip" title="Insert picture (or just drag &amp; drop)" class="btn btn-default">
                                 <em class="fa fa-picture-o"></em>
                              </a>
                              <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px">
                           </div>
                           <div class="btn-group pull-right">
                              <a data-edit="undo" data-toggle="tooltip" title="Undo (Ctrl/Cmd+Z)" class="btn btn-default">
                                 <em class="fa fa-undo"></em>
                              </a>
                              <a data-edit="redo" data-toggle="tooltip" title="Redo (Ctrl/Cmd+Y)" class="btn btn-default">
                                 <em class="fa fa-repeat"></em>
                              </a>
                           </div>
                        </div>
                        <div style="overflow:scroll; height:250px;max-height:250px" class="form-control wysiwyg mt-lg">Type something ...</div>
                     </div>
                  </div>
                </div>

                <br>

                <h4>Lowest Performing Post</h4>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
                <br>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
                <br>

                <div class="form-group">
                   <label class="col-sm-2 control-label">Comments?</label>
                   <div class="col-sm-10">
                      <label class="switch">
                         <input type="checkbox" id="lowPerfFbComments">
                         <span></span>
                      </label>
                   </div>
                </div>


                <div class="lpfEditor" id="lowPerfFbEditor" style="display:none;">
                  <div class="form-group">
                     <div class="col-sm-12">
                        <div data-role="editor-toolbar" data-target="#editor" class="btn-toolbar btn-editor">
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font" class="btn btn-default">
                                 <em class="fa fa-font"></em><b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontName Arial" style="font-family:'Arial'">Arial</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Sans" style="font-family:'Sans'">Sans</a>
                                 </li>
                                 <li><a href="" data-edit="fontName Serif" style="font-family:'Serif'">Serif</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Font Size" class="btn btn-default">
                                 <em class="fa fa-text-height"></em>&nbsp;<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="" data-edit="fontSize 5" style="font-size:24px">Huge</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 3" style="font-size:18px">Normal</a>
                                 </li>
                                 <li><a href="" data-edit="fontSize 1" style="font-size:14px">Small</a>
                                 </li>
                              </ul>
                           </div>
                           <div class="btn-group">
                              <a data-edit="bold" data-toggle="tooltip" title="Bold (Ctrl/Cmd+B)" class="btn btn-default">
                                 <em class="fa fa-bold"></em>
                              </a>
                              <a data-edit="italic" data-toggle="tooltip" title="Italic (Ctrl/Cmd+I)" class="btn btn-default">
                                 <em class="fa fa-italic"></em>
                              </a>
                              <a data-edit="strikethrough" data-toggle="tooltip" title="Strikethrough" class="btn btn-default">
                                 <em class="fa fa-strikethrough"></em>
                              </a>
                              <a data-edit="underline" data-toggle="tooltip" title="Underline (Ctrl/Cmd+U)" class="btn btn-default">
                                 <em class="fa fa-underline"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="insertunorderedlist" data-toggle="tooltip" title="Bullet list" class="btn btn-default">
                                 <em class="fa fa-list-ul"></em>
                              </a>
                              <a data-edit="insertorderedlist" data-toggle="tooltip" title="Number list" class="btn btn-default">
                                 <em class="fa fa-list-ol"></em>
                              </a>
                              <a data-edit="outdent" data-toggle="tooltip" title="Reduce indent (Shift+Tab)" class="btn btn-default">
                                 <em class="fa fa-dedent"></em>
                              </a>
                              <a data-edit="indent" data-toggle="tooltip" title="Indent (Tab)" class="btn btn-default">
                                 <em class="fa fa-indent"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a data-edit="justifyleft" data-toggle="tooltip" title="Align Left (Ctrl/Cmd+L)" class="btn btn-default">
                                 <em class="fa fa-align-left"></em>
                              </a>
                              <a data-edit="justifycenter" data-toggle="tooltip" title="Center (Ctrl/Cmd+E)" class="btn btn-default">
                                 <em class="fa fa-align-center"></em>
                              </a>
                              <a data-edit="justifyright" data-toggle="tooltip" title="Align Right (Ctrl/Cmd+R)" class="btn btn-default">
                                 <em class="fa fa-align-right"></em>
                              </a>
                              <a data-edit="justifyfull" data-toggle="tooltip" title="Justify (Ctrl/Cmd+J)" class="btn btn-default">
                                 <em class="fa fa-align-justify"></em>
                              </a>
                           </div>
                           <div class="btn-group dropdown">
                              <a data-toggle="dropdown" title="Hyperlink" class="btn btn-default">
                                 <em class="fa fa-link"></em>
                              </a>
                              <div class="dropdown-menu">
                                 <div class="input-group ml-xs mr-xs">
                                    <input id="LinkInput" placeholder="URL" type="text" data-edit="createLink" class="form-control input-sm">
                                    <div class="input-group-btn">
                                       <button type="button" class="btn btn-sm btn-default">Add</button>
                                    </div>
                                 </div>
                              </div>
                              <a data-edit="unlink" data-toggle="tooltip" title="Remove Hyperlink" class="btn btn-default">
                                 <em class="fa fa-cut"></em>
                              </a>
                           </div>
                           <div class="btn-group">
                              <a id="pictureBtn" data-toggle="tooltip" title="Insert picture (or just drag &amp; drop)" class="btn btn-default">
                                 <em class="fa fa-picture-o"></em>
                              </a>
                              <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px">
                           </div>
                           <div class="btn-group pull-right">
                              <a data-edit="undo" data-toggle="tooltip" title="Undo (Ctrl/Cmd+Z)" class="btn btn-default">
                                 <em class="fa fa-undo"></em>
                              </a>
                              <a data-edit="redo" data-toggle="tooltip" title="Redo (Ctrl/Cmd+Y)" class="btn btn-default">
                                 <em class="fa fa-repeat"></em>
                              </a>
                           </div>
                        </div>
                        <div style="overflow:scroll; height:250px;max-height:250px" class="form-control wysiwyg mt-lg">Type something ...</div>
                     </div>
                  </div>
                </div>

                <br>

                <h2>Facebook Statistics</h2>

                <h4>The people who like your page.</h4>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">

                <h4>The people who have liked, commented on, or shared your post or engaged with your Page in the past 28 days.</h4>
                <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
             </div>
             <div class="panel-footer"><button type="button" class="mb-sm btn btn-primary">Save</button></div>
          </div>
       </div>
     </div>
     <div class="col-md-12">
       <div id="instagramDetails" class="panel panel-default panel-demo">
          <div class="panel-heading panel-heading-collapsed">Instagram Insights
             <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                <em class="fa fa-plus"></em>
             </a>
          </div>
          <!-- .panel-wrapper is the element to be collapsed-->
          <div class="panel-wrapper collapse">
             <div class="panel-body">
               <h2>Instagram Engagement</h2>

               <h4>Top Performing Post</h4>
               <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">

               <h4>Least Performing Post</h4>
               <input type="file" data-classbutton="btn btn-default" class="form-control filestyle">
               <br>

               <div class="form-group">
                  <label class="col-sm-2 control-label">Comments?</label>
                  <div class="col-sm-10">
                     <label class="switch">
                        <input type="checkbox" id="IgEngComments">
                        <span></span>
                     </label>
                  </div>
               </div>


               <div class="IgEngEditor" id="IgEngEditor" style="display:none;">
                 <div class="form-group">
                    <div class="col-sm-12">
                       <div data-role="editor-toolbar" data-target="#editor" class="btn-toolbar btn-editor">
                          <div class="btn-group dropdown">
                             <a data-toggle="dropdown" title="Font" class="btn btn-default">
                                <em class="fa fa-font"></em><b class="caret"></b>
                             </a>
                             <ul class="dropdown-menu">
                                <li><a href="" data-edit="fontName Arial" style="font-family:'Arial'">Arial</a>
                                </li>
                                <li><a href="" data-edit="fontName Sans" style="font-family:'Sans'">Sans</a>
                                </li>
                                <li><a href="" data-edit="fontName Serif" style="font-family:'Serif'">Serif</a>
                                </li>
                             </ul>
                          </div>
                          <div class="btn-group dropdown">
                             <a data-toggle="dropdown" title="Font Size" class="btn btn-default">
                                <em class="fa fa-text-height"></em>&nbsp;<b class="caret"></b>
                             </a>
                             <ul class="dropdown-menu">
                                <li><a href="" data-edit="fontSize 5" style="font-size:24px">Huge</a>
                                </li>
                                <li><a href="" data-edit="fontSize 3" style="font-size:18px">Normal</a>
                                </li>
                                <li><a href="" data-edit="fontSize 1" style="font-size:14px">Small</a>
                                </li>
                             </ul>
                          </div>
                          <div class="btn-group">
                             <a data-edit="bold" data-toggle="tooltip" title="Bold (Ctrl/Cmd+B)" class="btn btn-default">
                                <em class="fa fa-bold"></em>
                             </a>
                             <a data-edit="italic" data-toggle="tooltip" title="Italic (Ctrl/Cmd+I)" class="btn btn-default">
                                <em class="fa fa-italic"></em>
                             </a>
                             <a data-edit="strikethrough" data-toggle="tooltip" title="Strikethrough" class="btn btn-default">
                                <em class="fa fa-strikethrough"></em>
                             </a>
                             <a data-edit="underline" data-toggle="tooltip" title="Underline (Ctrl/Cmd+U)" class="btn btn-default">
                                <em class="fa fa-underline"></em>
                             </a>
                          </div>
                          <div class="btn-group">
                             <a data-edit="insertunorderedlist" data-toggle="tooltip" title="Bullet list" class="btn btn-default">
                                <em class="fa fa-list-ul"></em>
                             </a>
                             <a data-edit="insertorderedlist" data-toggle="tooltip" title="Number list" class="btn btn-default">
                                <em class="fa fa-list-ol"></em>
                             </a>
                             <a data-edit="outdent" data-toggle="tooltip" title="Reduce indent (Shift+Tab)" class="btn btn-default">
                                <em class="fa fa-dedent"></em>
                             </a>
                             <a data-edit="indent" data-toggle="tooltip" title="Indent (Tab)" class="btn btn-default">
                                <em class="fa fa-indent"></em>
                             </a>
                          </div>
                          <div class="btn-group">
                             <a data-edit="justifyleft" data-toggle="tooltip" title="Align Left (Ctrl/Cmd+L)" class="btn btn-default">
                                <em class="fa fa-align-left"></em>
                             </a>
                             <a data-edit="justifycenter" data-toggle="tooltip" title="Center (Ctrl/Cmd+E)" class="btn btn-default">
                                <em class="fa fa-align-center"></em>
                             </a>
                             <a data-edit="justifyright" data-toggle="tooltip" title="Align Right (Ctrl/Cmd+R)" class="btn btn-default">
                                <em class="fa fa-align-right"></em>
                             </a>
                             <a data-edit="justifyfull" data-toggle="tooltip" title="Justify (Ctrl/Cmd+J)" class="btn btn-default">
                                <em class="fa fa-align-justify"></em>
                             </a>
                          </div>
                          <div class="btn-group dropdown">
                             <a data-toggle="dropdown" title="Hyperlink" class="btn btn-default">
                                <em class="fa fa-link"></em>
                             </a>
                             <div class="dropdown-menu">
                                <div class="input-group ml-xs mr-xs">
                                   <input id="LinkInput" placeholder="URL" type="text" data-edit="createLink" class="form-control input-sm">
                                   <div class="input-group-btn">
                                      <button type="button" class="btn btn-sm btn-default">Add</button>
                                   </div>
                                </div>
                             </div>
                             <a data-edit="unlink" data-toggle="tooltip" title="Remove Hyperlink" class="btn btn-default">
                                <em class="fa fa-cut"></em>
                             </a>
                          </div>
                          <div class="btn-group">
                             <a id="pictureBtn" data-toggle="tooltip" title="Insert picture (or just drag &amp; drop)" class="btn btn-default">
                                <em class="fa fa-picture-o"></em>
                             </a>
                             <input type="file" data-edit="insertImage" style="position:absolute; opacity:0; width:41px; height:34px">
                          </div>
                          <div class="btn-group pull-right">
                             <a data-edit="undo" data-toggle="tooltip" title="Undo (Ctrl/Cmd+Z)" class="btn btn-default">
                                <em class="fa fa-undo"></em>
                             </a>
                             <a data-edit="redo" data-toggle="tooltip" title="Redo (Ctrl/Cmd+Y)" class="btn btn-default">
                                <em class="fa fa-repeat"></em>
                             </a>
                          </div>
                       </div>
                       <div style="overflow:scroll; height:250px;max-height:250px" class="form-control wysiwyg mt-lg">Type something ...</div>
                    </div>
                 </div>
               </div>

               <br>
             </div>
             <div class="panel-footer"><button type="button" class="mb-sm btn btn-primary">Save</button></div>
          </div>
       </div>
     </div>
     <div class="col-md-12">
       <div id="twitterDetails" class="panel panel-default panel-demo">
          <div class="panel-heading panel-heading-collapsed">Twitter Insights
          </div>
          <!-- .panel-wrapper is the element to be collapsed-->
          <div class="panel-wrapper collapse">
             <div class="panel-body">
                <p>Initially collapsed panel</p>
             </div>
             <div class="panel-footer"><button type="button" class="mb-sm btn btn-primary">Save</button></div>
          </div>
       </div>
     </div>
     <div class="col-md-12">
       <div id="twitterDetails" class="panel panel-default panel-demo">
          <div class="panel-heading panel-heading-collapsed">Snapchat Insights
          </div>
          <!-- .panel-wrapper is the element to be collapsed-->
          <div class="panel-wrapper collapse">
             <div class="panel-body">
                <p>Initially collapsed panel</p>
             </div>
             <div class="panel-footer"><button type="button" class="mb-sm btn btn-primary">Save</button></div>
          </div>
       </div>
     </div>
   </div>
</div>
<script type="text/javascript">
  $('#oprComments').click(function() {
    $('#oprEditor').toggle(this.checked);
  });

  $('#lcsComments').click(function() {
    $('#lcsEditor').toggle(this.checked);
  });

  $('#topPerfFbComments').click(function() {
    $('#topPerfFbEditor').toggle(this.checked);
  });

  $('#lowPerfFbComments').click(function() {
    $('#lowPerfFbEditor').toggle(this.checked);
  });

  $('#IgEngComments').click(function() {
    $('#IgEngEditor').toggle(this.checked);
  });
</script>
