package deco;

public abstract class SorveteDecorator implements ISorvete{
	protected ISorvete objetoDecorado;
	public SorveteDecorator(ISorvete objetoDecorado) {
		this.objetoDecorado = objetoDecorado;
	}
}
