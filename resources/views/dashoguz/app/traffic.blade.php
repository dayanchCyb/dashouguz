@extends('dashoguz.layouts.app')
@section('content')

        <section class="transports">
          <div class="transports__container __container">
            <div class="transports__box">
              <div class="transports__title-box">
                <div class="transports__title">
                  <div class="transports__img">
                    <img src="./img/back.svg" alt="" />
                  </div>
                  <span>Gatnawlar</span>
                </div>
              </div>
              <div class="transports__content-box">
                <div class="transports__content-btns">
                  <div class="transports__btn active">Şäherýaka  ugurlar</div>
                  <div class="transports__btn">Şäherara ugurlar</div>
                </div>
                <div class="transports__content-table">
                  <table class="transports__table active">
                    <thead class="transports__table-head">
                      <tr class="transports__table-head-row">
                        <th class="transports__table-head-col">№</th>
                        <th class="transports__table-head-col">
                          Ugramaly nokady
                        </th>
                        <th class="transports__table-head-col">
                          Barmaly nokady
                        </th>
                        <th class="transports__table-head-col">
                          Gatnawyň ýygylygy
                        </th>
                        <th class="transports__table-head-col">
                          Aýlawyň dowamlylygy
                        </th>
                      </tr>
                    </thead>
                    <tbody class="transports__table-body">
                    <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">1</td>
                        <td class="transports__table-body-col">
                        Mary 
                        </td>
                        <td class="transports__table-body-col">
                        Baýramaly	
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:30	 </span> <span>  7:15</span>   <span style="margin-right: 50px "><br> 6:50	 </span> <span>7:35	</span>
                        <span style="margin-right: 50px "><br> 7:10 </span> <span> 7:55</span><span style="margin-right: 50px "><br> 7:30</span> <span> 8:15</span><span style="margin-right: 50px "><br>7:50	 </span> <span> 8:35</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">2</td>
                        <td class="transports__table-body-col">
                        Baýramaly
                        </td>
                        <td class="transports__table-body-col">
                        	Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:50	 </span> <span>  8:35</span>   <span style="margin-right: 50px "><br> 8:10	 </span> <span>8:55	</span>
                        <span style="margin-right: 50px "><br> 8:30 </span> <span> 9:15</span><span style="margin-right: 50px "><br> 8:50	</span> <span> 9:35</span><span style="margin-right: 50px "><br>9:10	</span> <span>9:55</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">3</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Sakarçäge
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:00		 </span> <span>  6:40</span>   <span style="margin-right: 50px "><br> 6:20	</span> <span>7:00	</span>
                        <span style="margin-right: 50px "><br>6:40	 </span> <span>7:20</span><span style="margin-right: 50px "><br> 7:00		</span> <span> 7:40</span><span style="margin-right: 50px "><br>7:20		</span> <span>8:00</span><span style="margin-right: 50px "><br>7:40		</span> <span>8:20</span><span style="margin-right: 50px "><br>8:00		</span> <span>8:40</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">4</td>
                        <td class="transports__table-body-col">
                        Sakarçäge
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:00	</span> <span>  7:40</span>   <span style="margin-right: 50px "><br> 7:20		</span> <span>8:00	</span>
                        <span style="margin-right: 50px "><br>7:40		 </span> <span>8:20</span><span style="margin-right: 50px "><br> 8:00		</span> <span> 8:40</span><span style="margin-right: 50px "><br>8:20		</span> <span>9:00</span><span style="margin-right: 50px "><br>8:40	</span> <span>9:20</span><span style="margin-right: 50px "><br>9:00		</span> <span>9:40</span>
                       </td>
                       <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">5</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Murgap
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:10		</span> <span>  6:40</span>   <span style="margin-right: 50px "><br> 6:30			</span> <span>7:00	</span>
                        <span style="margin-right: 50px "><br>6:50	</span> <span>7:20</span><span style="margin-right: 50px "><br>7:10			</span> <span>7:40</span><span style="margin-right: 50px "><br>7:30	</span> <span>8:00</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">6</td>
                        <td class="transports__table-body-col">
                        Murgap
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:00	</span> <span>7:40	</span>   <span style="margin-right: 50px "><br> 7:20	</span> <span>	8:00</span>
                        <span style="margin-right: 50px "><br>7:40		</span> <span>8:20</span><span style="margin-right: 50px "><br>8:00	</span> <span>8:40</span><span style="margin-right: 50px "><br>8:30	</span> <span>9:10</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">7</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Şatlyk
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:10		</span> <span>7:00	</span>   <span style="margin-right: 50px "><br> 6:30	</span> <span>	7:20</span>
                        <span style="margin-right: 50px "><br>6:50			</span> <span>7:40</span><span style="margin-right: 50px "><br>7:10		</span> <span>8:00</span><span style="margin-right: 50px "><br>7:30		</span> <span>8:20</span>
                       </td>
                      </tr>


                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">8</td>
                        <td class="transports__table-body-col">
                        Şatlyk
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:00			</span> <span>7:50	</span>   <span style="margin-right: 50px "><br> 7:20	</span> <span>		8:10</span>
                        <span style="margin-right: 50px "><br>7:40	</span> <span>8:30</span><span style="margin-right: 50px "><br>8:00			</span> <span>8:50</span><span style="margin-right: 50px "><br>8:20	</span> <span>9:10</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">9</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Wekilbazar
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:00	</span> <span>6:50	</span>   <span style="margin-right: 50px "><br> 8:00</span> <span>			8:50</span>
                        <span style="margin-right: 50px "><br>10:00		</span> <span>10:50</span><span style="margin-right: 50px "><br>12:00	</span> <span>12:50</span><span style="margin-right: 50px "><br>14:00</span> <span>	14:50</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">10</td>
                        <td class="transports__table-body-col">
                        Wekilbazar
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:50	</span> <span>7:35	</span>   <span style="margin-right: 50px "><br>8:50		</span> <span>		9:35</span>
                        <span style="margin-right: 50px "><br>10:50		</span> <span>11:35</span><span style="margin-right: 50px "><br>12:50	</span> <span>13:35</span><span style="margin-right: 50px "><br>14:50</span> <span>	15:35</span>
                       </td>
                      </tr> <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">11</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Ýolöten
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:30		</span> <span>8:50	</span>   <span style="margin-right: 50px "><br>8:30			</span> <span>	9:50</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">12</td>
                        <td class="transports__table-body-col">
                        Ýolöten
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">9:30			</span> <span>10:50	</span>   <span style="margin-right: 50px "><br>10:30				</span> <span>	11:50</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">13</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Nyýazow daýhan birleşigi	
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:10		</span> <span>6:50	</span>   <span style="margin-right: 50px "><br>6:30	</span> <span>7:10</span>
                        <span style="margin-right: 50px "><br>6:50			</span> <span>7:30</span><span style="margin-right: 50px "><br>7:10		</span> <span>7:50</span><span style="margin-right: 50px "><br>7:30	</span> <span>	8:10</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">14</td>
                        <td class="transports__table-body-col">
                        Nyýazow daýhan birleşigi	
                        </td>
                        <td class="transports__table-body-col">
                      Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:00			</span> <span>7:40	</span>   <span style="margin-right: 50px "><br>7:20		</span> <span>8:00</span>
                        <span style="margin-right: 50px "><br>67:40				</span> <span>8:20</span><span style="margin-right: 50px "><br>8:00			</span> <span>8:40</span><span style="margin-right: 50px "><br>8:30		</span> <span>9:10</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">15</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Hakykat daýhan birleşigi
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:00				</span> <span>6:45	</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">16</td>
                        <td class="transports__table-body-col">
                        Hakykat daýhan birleşigi
                        </td>
                        <td class="transports__table-body-col">
                          Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:00		</span> <span>7:45	</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">17</td>
                        <td class="transports__table-body-col">
                        Mary	
                        </td>
                        <td class="transports__table-body-col">
                        Mekan daýhan birleşigi
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:00				</span> <span>6:45	</span>   <span style="margin-right: 50px "><br>6:30			</span> <span>7:15</span>
                       </td>
                      </tr>


                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">18</td>
                        <td class="transports__table-body-col">
                        Mekan daýhan birleşigi
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:00	</span> <span>7:45	</span>   <span style="margin-right: 50px "><br>7:30				</span> <span>8:15</span>
                       </td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">19</td>
                        <td class="transports__table-body-col">
                        Türkmenistan daýhan birleşigi	
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:10		</span> <span>6:40	</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">20</td>
                        <td class="transports__table-body-col">
                        Goňur daýhan birleşigi	
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:30				</span> <span>7:30	</span>  <span style="margin-right: 50px "><br>7:00					</span> <span>8:00</span>  <span style="margin-right: 50px "><br>7:30	</span> <span>8:30</span>
                       </td>
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">21</td>
                        <td class="transports__table-body-col">
                        Kümüşçi oba	
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">5:50	</span> <span>7:05	</span> 
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">22</td>
                        <td class="transports__table-body-col">
                          Mary
                        </td>
                        <td class="transports__table-body-col">
                        Baýramaly daýhan birleşigi	
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">5:50		</span> <span>7:20	</span> 
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">23</td>
                        <td class="transports__table-body-col">
                        Baýramaly daýhan birleşigi
                        </td>
                        <td class="transports__table-body-col">
            Mary
                      </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:30			</span> <span>9:30	</span> 
                      </tr>

                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">24</td>
                        <td class="transports__table-body-col">
                        Keseýap daýhan birleşigi
                        </td>
                        <td class="transports__table-body-col">
                        Mary 
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">5:50		</span> <span>6:35</span> 
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">25</td>
                        <td class="transports__table-body-col">
                       Mary
                        </td>
                        <td class="transports__table-body-col">
                        Keseýap daýhan birleşigi
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:40	</span> <span>8:30	</span> 
                      </tr>
                   
                   
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">26</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Täze durmuş daýhan birleşigi	
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:15	</span> <span>6:55	</span>  <span style="margin-right: 50px "><br>6:45						</span> <span>7:25</span>  <span style="margin-right: 50px "><br>7:15		</span> <span>7:55</span>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">27</td>
                        <td class="transports__table-body-col">
                        Täze durmuş daýhan birleşigi	
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col"> <span style="margin-right: 50px ">7:00					</span> <span>7:40	</span>  <span style="margin-right: 50px "><br>7:30	</span> <span>8:10</span>  <span style="margin-right: 50px "><br>8:00		</span> <span>8:40</span>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">28</td>
                        <td class="transports__table-body-col">
                        Mary	
                        </td>
                        <td class="transports__table-body-col">
                        Köp ugurly Söwda bazary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:10		</span> <span>6:42	</span>   <span style="margin-right: 50px "><br>6:24		</span> <span>6:56</span>
                        <span style="margin-right: 50px "><br>6:36		</span> <span>7:06</span><span style="margin-right: 50px "><br>6:48			</span> <span>7:18</span><span style="margin-right: 50px "><br>7:00	</span> <span>	7:30</span>
                        <span style="margin-right: 50px "><br>7:12		</span> <span>7:42</span>
                        
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">29</td>
                        <td class="transports__table-body-col">
                        Köp ugurly Söwda bazary
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:47			</span> <span>7:17	</span>   <span style="margin-right: 50px "><br>7:01			</span> <span>7:31</span>
                        <span style="margin-right: 50px "><br>7:11			</span> <span>7:41</span><span style="margin-right: 50px "><br>7:23				</span> <span>7:53</span><span style="margin-right: 50px "><br>7:35</span> <span>		8:05</span>
                        <span style="margin-right: 50px "><br>7:47			</span> <span>7:42</span>
                        
                      </tr>
                    </tbody>
                  </table>
                  <table class="transports__table">
                    <thead class="transports__table-head">
                      <tr class="transports__table-head-row">
                        <th class="transports__table-head-col">№</th>
                        <th class="transports__table-head-col">
                          Ugramaly nokady
                        </th>
                        <th class="transports__table-head-col">
                          Barmaly nokady
                        </th>
                        <th class="transports__table-head-col">
                          Gatnaw ýoluň uzynlygy(km)
                        </th>
                        <th class="transports__table-head-col">
                          Aýlawyň dowamlylygy
                        </th>
                      </tr>
                    </thead>
                    <tbody class="transports__table-body">
                    <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">1</td>
                        <td class="transports__table-body-col">
                          Mary
                        </td>
                        <td class="transports__table-body-col">
                          Oguzhan
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px "> 7:30   </span> <span>   9:05  </span></td>
                      </tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">2</td>
                        <td class="transports__table-body-col">
                          Oguzhan
                        </td>
                        <td class="transports__table-body-col">
                          Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px "> 7:30   </span> <span>   9:05  </span></td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">3</td>
                        <td class="transports__table-body-col">
                          Mary 
                        </td>
                        <td class="transports__table-body-col">
                          Serhetabat
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">12:00	 </span> <span>  18:00 </span>   <span style="margin-right: 50px "><br> 15:00	 </span> <span>  21:00 </span></td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">4</td>
                        <td class="transports__table-body-col">
                        Serhetabat 
                        </td>
                        <td class="transports__table-body-col">
                          Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:00	 </span> <span>  12:00 </span>   <span style="margin-right: 50px "><br> 12:00	 </span> <span>  18:00 </span></td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">5</td>
                        <td class="transports__table-body-col">
                        Mary <br>Türkmenabat
                        </td>
                        <td class="transports__table-body-col">
                        Türkmenabat <br> Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">10:00	 </span> <span>  15:00 </span>   <span style="margin-right: 50px "><br> 15:30	 </span> <span>  20:30 </span></td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">6</td>
                        <td class="transports__table-body-col">
                        Mary <br>Tagtabazar
                        </td>
                        <td class="transports__table-body-col">
                        Tagtabazar <br> Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">13:30	 </span> <span>  17:30 </span>   <span style="margin-right: 50px "><br> 6:00	 </span> <span>  10:00 </span></td>
                      </tr>
                    
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">7</td>
                        <td class="transports__table-body-col">
                        Mary 
                        </td>
                        <td class="transports__table-body-col">
                        Deňizhan
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">8:00	 </span> <span>  10:00 </span>   <span style="margin-right: 50px "><br> 13:00	 </span> <span>  15:00 </span></td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">8</td>
                        <td class="transports__table-body-col">
                        Deňizhan 
                        </td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">10:00	 </span> <span>  12:00 </span>   <span style="margin-right: 50px "><br> 16:00	 </span> <span>  18:00 </span></td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">9</td>
                        <td class="transports__table-body-col">
                        Mary 
                        </td>
                        <td class="transports__table-body-col">
                        Altyn sähra
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">9:00 </span> <span>  10:50</span>   <span style="margin-right: 50px "><br> 7:00	 </span> <span> 8:55</span></td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">10</td>
                        <td class="transports__table-body-col">
                        №4 Awtomenzil 
                        </td>
                        <td class="transports__table-body-col">
                        Mary-1
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">6:30 </span> <span>  7:00</td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">11</td>
                        <td class="transports__table-body-col">
                        Mary-1
                        </td>
                        <td class="transports__table-body-col">
                        №4 Awtomenzil 
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">7:00 </span> <span>  7:30</td>
                      </tr>
                      <tr>
                        <tr class="transports__table-body-row">
                        <td class="transports__table-body-col">12</td>
                        <td class="transports__table-body-col">
                        Mary
                        </td>
                        <td class="transports__table-body-col">
                        Tejen 
                        </td>
                        <td class="transports__table-body-col">Her gün  </td>
                        <td class="transports__table-body-col">  <span style="margin-right: 50px ">8:00 </span> <span> 11:00</td>
                      </tr>
                    </tbody>
                  </table>
                
                </div>
              </div>
            </div>
          </div>
        </section>
@endsection
