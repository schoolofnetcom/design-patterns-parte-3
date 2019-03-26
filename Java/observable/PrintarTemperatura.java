package teste;

import java.util.Observable;
import java.util.Observer;

public class PrintarTemperatura implements Observer{

	private Clima climaObservable;
	
	public PrintarTemperatura(Clima climaObservable) {
		super();
		this.climaObservable = climaObservable;
		this.climaObservable.addObserver(this);
	}

	@Override
	public void update(Observable arg0, Object arg1) {
		System.out.println("Temperatura atual: " + this.climaObservable.getTemperatura());
	}
}
